<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeTemplateController extends Controller
{

    public function index()
    {
        $categories = Category::with(['subcategories.subSubcategories'])->withCount('products')->get();
        $products = Product::with('images')->get();
        return view('frontend.home', compact('categories', 'products'));

    }

    
}
