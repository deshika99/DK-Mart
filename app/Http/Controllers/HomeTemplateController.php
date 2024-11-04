<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class HomeTemplateController extends Controller
{

    public function index()
    {
        $categories = Category::with('subcategories.subSubcategories')->get();
        return view('frontend.Home', compact('categories'));

    }
}
