<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrderItem;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logged-in user details
        $user = auth()->user();
        
        // Returning the dashboard view inside user_dashboard folder
        return view('user_dashboard.dashboard', compact('user'));
    }

    public function myReviews()
    {
        $orderItems = CustomerOrderItem::where('reviewed', 'no')
            ->with('product') // load product relationship
            ->paginate(5);
           

        return view('user_dashboard.My-Reviews', compact('orderItems'));
    }

    public function addReview($id)
    {
        $item = CustomerOrderItem::findOrFail($id);
        return view('user_dashboard.add-review', compact('item'));
    }

    public function myOrders()
    {
        // Current logged-in user ID
        $user = auth()->user();
        if (!$user) {
            return redirect('/login')->with('error', 'Please log in to view your orders.');
        }
        
        // CustomerOrderItems (Order history) retrieve
        
        $orders = CustomerOrderItem::where('order_code', $user->id)  
            ->with('product') 
            ->paginate(10);  
        
        return view('user_dashboard.my-orders', compact('orders'));
    }

    public function orderDetails($order_code)
    {
        // Order details retrieve
        $order = CustomerOrderItem::where('order_code', $order_code)->with('product')->first();

        if (!$order) {
            return redirect()->route('my-orders')->with('error', 'Order not found');
        }

        return view('user_dashboard.order-details', compact('order'));
    }
}