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

        // Fetch products with images and reviews
        $products = Product::with(['images', 'reviews' => function ($query) {
            $query->where('status', 'Published'); // Only fetch published reviews
        }])->get();

        // Calculate average rating and total reviews for each product
        foreach ($products as $product) {
            $product->average_rating = $product->reviews->avg('rating') ?? 0; // Average rating
            $product->total_reviews = $product->reviews->count(); // Total number of published reviews
        }

        return view('frontend.home', compact('categories', 'products'));
    }
}
