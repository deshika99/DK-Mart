<?php

namespace App\Http\Controllers;

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
