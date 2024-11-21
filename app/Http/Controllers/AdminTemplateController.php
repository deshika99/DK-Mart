<?php

namespace App\Http\Controllers;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon; 

class AdminTemplateController extends Controller
{

    public function index() {
        $orderCount = CustomerOrder::count();
        $customerCount = User::count();
        $productCount = Product::count();
        $totalCostToday = CustomerOrder::whereDate('created_at', Carbon::today())->sum('total_cost');
        
        // Get the latest 10 orders from the last 3 days
        $latestOrders = CustomerOrder::where('created_at', '>=', Carbon::now()->subDays(3))
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
            
        return view('AdminDashboard.Home', compact('orderCount', 'customerCount', 'productCount', 'totalCostToday', 'latestOrders'));
    }
}


