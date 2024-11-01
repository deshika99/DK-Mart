<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeTemplateController extends Controller
{
    public function index(){
        $products = Product::with('images')->get();
        return view('frontend.Home',compact('products'));
    }
}
