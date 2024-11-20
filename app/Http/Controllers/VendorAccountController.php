<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Shop;
use App\Models\CustomerOrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class VendorAccountController extends Controller
{


    public function show()
    {
        $vendors = Vendor::all();
        return view('AdminDashboard.vendors', compact('vendors'));
    }


    public function updateStatus($id, $status)
    {
        $vendors = Vendor::findOrFail($id);
        $vendors->status = $status;
        $vendors->save();

        return redirect()->route('vendors')->with('success', 'Vendor status updated successfully!');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email|unique:vendors,email',
            'phone_num' => 'required|string|max:15',
            'password' => 'required|string|min:6|confirmed',
            'terms' => 'accepted',
        ]);

        // Create a new vendor 
        Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'phone' => $request->phone_num,
            'address' => $request->address,
            'status' => 'pending', 
        ]);

        return redirect()->route('vendor_login')->with('success', 'Registration successful. Please wait for approval.');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $vendor = Vendor::where('email', $request->email)->first();
        if ($vendor && $vendor->status === 'approved' && Hash::check($request->password, $vendor->password)) {
            session(['vendor_id' => $vendor->id]);
            return redirect()->route('vendorhome')->with('success', 'Logging Success...!, Welcome to your dashboard!');
        }

        return back()->withErrors(['error' => 'Invalid login credentials or account not approved.']);
    }


    public function logout(Request $request)
    {
        $request->session()->forget('vendor_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('vendor_login')->with('success', 'You have been logged out successfully.');
    }



    public function showVendorDetails($vendorId)
    {
        $vendor = Vendor::with('shop')->findOrFail($vendorId);
        $shop = $vendor->shop;
    
        if (!$shop) {
            return redirect()->route('vendors')->with('error', 'Shop not found for this vendor.');
        }
    
        $products = Product::where('shop_id', $shop->id)
                            ->with(['images', 'category', 'subcategory', 'subsubcategory'])
                            ->paginate(10);
    
        // Calculate total sales and revenue
        $totalSales = CustomerOrderItems::join('products', 'customer_order_items.product_id', '=', 'products.id')
                                        ->where('products.shop_id', $shop->id)
                                        ->sum('customer_order_items.quantity');
    
        $revenue = CustomerOrderItems::join('products', 'customer_order_items.product_id', '=', 'products.id')
                                     ->where('products.shop_id', $shop->id)
                                     ->sum('customer_order_items.cost');
    
        return view('AdminDashboard.vendor-details', compact('vendor', 'shop', 'products', 'totalSales', 'revenue'));
    }
    


}
