<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
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
}
