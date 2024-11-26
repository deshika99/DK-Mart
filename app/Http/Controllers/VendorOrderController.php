<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\CustomerOrder;
use Illuminate\Http\Request;
use App\Models\CustomerOrderItems;


class VendorOrderController extends Controller
{


    public function index(Request $request)
    {
        $vendor_id = session('vendor_id');

        $query = CustomerOrder::query();

        if ($request->filled('order_code')) {
            $query->where('order_code', 'like', '%' . $request->order_code . '%');
        }

        if ($request->filled('status') && $request->status != 'All') {
            $query->where('status', $request->status);
        }

        $orders = $query->whereHas('items.product', function ($query) use ($vendor_id) {
            $query->whereHas('shop', function ($shopQuery) use ($vendor_id) {
                $shopQuery->where('vendor_id', $vendor_id);
            });
        })
        ->latest()
        ->paginate(10);

        return view('VendorDashboard.orders', compact('orders'));
    }



    public function destroy($id)
    {
        $order = CustomerOrder::findOrFail($id);
        $order->delete();

        return redirect()->route('vendor.orders')->with('success', 'Order deleted successfully.');
    }



    public function showOrderDetails($orderCode)
    {
        $order = CustomerOrder::with('items.product.images')->where('order_code', $orderCode)->first();
        return view('VendorDashboard.order-details', compact('order'));
    }


    public function updateStatus(Request $request, $orderCode)
    {

        $request->validate([
            'status' => 'required|string|in:Accepted,Shipped,Delivered,Cancelled',
        ]);

        $order = CustomerOrder::where('order_code', $orderCode)->firstOrFail();

        $order->update([
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

}
