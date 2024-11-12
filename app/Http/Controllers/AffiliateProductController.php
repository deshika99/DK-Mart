<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\RaffleTicket;
use Illuminate\Support\Facades\Session;

class AffiliateProductController extends Controller
{
    

    public function showAdCenter(Request $request)
{
    $categoryName = $request->get('category', 'all');
    $customerId = Session::get('customer_id');

    // Retrieve user's tracking IDs (raffle tickets)
    $trackingIds = RaffleTicket::where('user_id', $customerId)->get();

    // Check for "Pending" tracking ID status, default if needed
    $defaultTrackingId = $trackingIds->where('status', 'Pending')->first();
    if (!$defaultTrackingId && $trackingIds->count() == 1) {
        $defaultTrackingId = $trackingIds->first();
        $defaultTrackingId->status = 'Pending';
        $defaultTrackingId->save();
    }

    // Retrieve Products for Hot Deals and High Commission with category filter and images eager-loading
    $query = Product::with(['images', 'category', 'subcategory', 'subSubcategory'])->where('is_affiliate', 1);
    
    // Filter by category if specified
    if ($categoryName !== 'all') {
        $category = Category::where('name', $categoryName)->first();
        if ($category) {
            $query->where('category_id', $category->id);
        }
    }
    
    $hotDeals = $query->get();

    // Retrieve High Commission Products with images eager-loading and threshold filter
    $commissionThreshold = 8;
    $highComQuery = Product::with(['images', 'category', 'subcategory', 'subSubcategory'])
                            ->where('commission_percentage', '>', $commissionThreshold)
                            ->where('is_affiliate', 1);

    if ($categoryName !== 'all') {
        $highComQuery->where('category_id', $category->id);
    }

    $highCom = $highComQuery->get();

    // Get all categories for the view
    $categories = Category::with('subcategories.subSubcategories')->get();

    return view('AffiliateDashBoard.adcenter', compact('hotDeals', 'highCom', 'categories', 'defaultTrackingId'));
}

    
}
