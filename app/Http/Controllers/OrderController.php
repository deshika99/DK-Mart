<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\CustomerOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function show()
    {
       
        $customers = User::withCount('customerOrders')->paginate(10); 
        return view('AdminDashboard.customer', compact('customers'));
    }
    


    public function showCustomerDetails($user_id)
    {

        $customer = User::findOrFail($user_id);
        
        $orders = CustomerOrder::where('user_id', $user_id)
            ->with('items.product')
            ->get();
        
        $totalCost = $orders->sum('total_cost');
        $totalOrders = $orders->count();
        $totalProducts = $orders->sum(function ($order) {
            return $order->items->sum('quantity');
        });
        

        return view('AdminDashboard.customer-details', compact('customer', 'orders', 'totalCost', 'totalOrders', 'totalProducts'));

use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;

class OrderController extends Controller
{
    public function index()
    {
        $orders = CustomerOrder::with('items')->paginate(10); 

        return view('AdminDashboard.orders', compact('orders'));
    }

    public function destroy($id)
    {
        $order = CustomerOrder::findOrFail($id);
        $order->delete();

        return redirect()->route('orders')->with('success', 'Order deleted successfully.');
    }



    public function showOrderDetails($orderCode)
    {
        // Retrieve the order with its items using the relationship
        $order = CustomerOrder::with('items.product')->where('order_code', $orderCode)->first();

        // Pass the order data to the view
        return view('AdminDashboard.order-details', compact('order'));
    }
}
