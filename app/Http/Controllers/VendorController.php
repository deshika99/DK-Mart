<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $location = request()->get('location');
        $vendors = Vendor::with('shop')
                        ->when($location, function ($query) use ($location) {
                            return $query->where('address', 'like', '%' . $location . '%');
                        })
                        ->paginate(15);
    
        $totalResults = $vendors->total(); 
    
        return view('frontend.vendor', compact('vendors', 'totalResults'));
    }
    



    
    public function showVendorDetails($vendorId)
    {
        // Fetch vendor and its related shop
        $vendornew = Vendor::with('shop')->find($vendorId);
        $categoryId = request()->get('category_id');
    
        $products = Product::where('shop_id', $vendornew->shop->id)
                            ->when($categoryId, function ($query) use ($categoryId) {
                                return $query->where('category_id', $categoryId);
                            })
                            ->paginate(20);
        
        $categories = Category::all();
        
        return view('frontend.vendor-details', compact('vendornew', 'products', 'categories', 'categoryId'));

    }
    
    
    
    
}
