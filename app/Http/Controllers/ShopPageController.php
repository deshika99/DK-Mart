<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Category;

class ShopPageController extends Controller
{
    public function index(Request $request)
    {
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 20000);
        $categoryId = $request->input('category_id'); 
        $subcategoryId = $request->input('subcategory_id'); 
        $subsubcategoryId = $request->input('subsubcategory_id'); 
        $color = $request->input('color'); 
    
        $query = Product::with('images', 'variations');
    
        // Filter by main category
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }
    
        // Filter by subcategory
        if ($subcategoryId) {
            $query->where('subcategory_id', $subcategoryId);
        }
    
        // Filter by sub-subcategory
        if ($subsubcategoryId) {
            $query->where('subsubcategory_id', $subsubcategoryId);
        }
    
        // Filter by color
        if ($color) {
            $query->whereHas('variations', function ($q) use ($color) {
                $q->where('type', 'color')->where('hex_value', $color);
            });
        }
    
        // Filter by price
        $products = $query->whereBetween('normal_price', [$minPrice, $maxPrice])->paginate(20);
        $categories = Category::withCount('products')->get(); 
    
        return view('frontend.shop', compact('products', 'categories', 'minPrice', 'maxPrice', 'categoryId', 'subcategoryId', 'subsubcategoryId', 'color'));
    }
    

    

   
}
