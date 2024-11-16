<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;
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
    }

    public function index()
    {
        $orders = CustomerOrder::with('items')->paginate(10); 
use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = CustomerOrder::query();
        if ($request->filled('order_code')) {
            $query->where('order_code', 'like', '%' . $request->order_code . '%');
        }
        if ($request->filled('status') && $request->status != 'All') {
            $query->where('status', $request->status);
        }
        $orders = $query->latest()->paginate(10);

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
        $order = CustomerOrder::with('items.product')->where('order_code', $orderCode)->first();
        $order = CustomerOrder::with('items.product.images')->where('order_code', $orderCode)->first();
        return view('AdminDashboard.order-details', compact('order'));
    }


    public function updateStatus(Request $request, $orderCode)
    {

        $request->validate([
            'status' => 'required|string|in:In-Progress,Shipped,Delivered',
        ]);

        $order = CustomerOrder::where('order_code', $orderCode)->firstOrFail();

        $order->update([
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

}
