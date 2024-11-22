<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerOrderItems;
use App\Models\CustomerOrder;
use App\Models\Product;
use App\Models\Shop;
use App\Models\VendorPaymentRequest;
use App\Models\User;
use Carbon\Carbon;

class VendorDashboardController extends Controller
{

    public function vendorDashboard(Request $request)
    {
        $vendorId = session('vendor_id');
        $today = now()->toDateString(); 
    
        $customerCount = User::count();
    
        // Fetch all orders that belong to the vendor
        $orders = CustomerOrder::whereHas('items.product', function ($query) use ($vendorId) {
            $query->whereHas('shop', function ($shopQuery) use ($vendorId) {
                $shopQuery->where('vendor_id', $vendorId);
            });
        })->get();
    
        $totalOrders = $orders->count();
        $totalProducts = Product::whereHas('shop', function ($query) use ($vendorId) {
            $query->where('vendor_id', $vendorId);
        })->count();
    
        // Fetch today's orders for the vendor
        $ordersToday = CustomerOrderItems::with('order', 'product')
            ->whereHas('product', function ($query) use ($vendorId) {
                $query->where('shop_id', function ($query) use ($vendorId) {
                    $query->select('id')
                        ->from('shops')
                        ->where('vendor_id', $vendorId);
                });
            })
            ->whereDate('created_at', $today)
            ->get();
    
        $totalEarningsToday = $ordersToday->sum(function ($orderItem) {
            $product = $orderItem->product;
            $baseCommission = $orderItem->cost * 0.08;
            $affiliateCommission = $product->is_affiliate ? $product->commission_price * $orderItem->quantity : 0;
            $totalCommission = $baseCommission + $affiliateCommission;
            return $orderItem->cost - $totalCommission;
        });
    
        // Data for charts
        $monthlySales = CustomerOrderItems::whereHas('product', function ($query) use ($vendorId) {
            $query->where('shop_id', function ($query) use ($vendorId) {
                $query->select('id')->from('shops')->where('vendor_id', $vendorId);
            });
        })
        ->selectRaw('MONTH(created_at) as month, SUM(cost) as total_sales')
        ->groupBy('month')
        ->orderBy('month')
        ->get()
        ->pluck('total_sales', 'month');
    
        // Calculate number of orders per month
        $monthlyOrders = CustomerOrder::whereHas('items.product', function ($query) use ($vendorId) {
            $query->whereHas('shop', function ($shopQuery) use ($vendorId) {
                $shopQuery->where('vendor_id', $vendorId);
            });
        })
        ->selectRaw('MONTH(customer_orders.created_at) as month, COUNT(DISTINCT customer_orders.order_code) as total_orders')
        ->groupBy('month')
        ->orderBy('month')
        ->get()
        ->pluck('total_orders', 'month');
    
        // Prepare chart data for all 12 months
        $salesData = array_fill(0, 12, 0);
        $ordersData = array_fill(0, 12, 0);
    
        foreach ($monthlySales as $month => $sales) {
            $salesData[$month - 1] = $sales; 
        }
    
        foreach ($monthlyOrders as $month => $orders) {
            $ordersData[$month - 1] = $orders; 
        }
    
       // Fetch recent activities
        $recentActivities = collect();

        // Shipped Orders
        $shippedOrders = CustomerOrder::whereHas('items.product', function ($query) use ($vendorId) {
            $query->whereHas('shop', function ($shopQuery) use ($vendorId) {
                $shopQuery->where('vendor_id', $vendorId);
            });
        })->where('status', 'shipped')->latest()->take(5)->get();

        foreach ($shippedOrders as $order) {
            $recentActivities->push([
                'date' => $order->created_at->format('d M'),
                'message' => 'Shipped order: ' . $order->order_code
            ]);
        }

        // Added New Products
        $newProducts = Product::whereHas('shop', function ($query) use ($vendorId) {
            $query->where('vendor_id', $vendorId);
        })->latest()->take(5)->get();

        foreach ($newProducts as $product) {
            $recentActivities->push([
                'date' => $product->created_at->format('d M'),
                'message' => 'New product added: ' . $product->product_name
            ]);
        }

        // Vendor Payment Requests
        $paymentRequests = VendorPaymentRequest::where('vendor_id', $vendorId)->latest()->take(5)->get();

        foreach ($paymentRequests as $request) {
            $status = $request->status == 'Completed' ? 'Completed payment request Rs' : 'Payment requested Rs';
            $recentActivities->push([
                'date' => $request->requested_at->format('d M'),
                'message' => $status . ': ' . $request->request_amount
            ]);
        }

        // Sort activities by date and limit to the top 6
        $recentActivities = $recentActivities->sortByDesc('date')->take(6);


      // Get the latest 10 orders from the last 3 days
      $latestOrders = CustomerOrder::where('created_at', '>=', Carbon::now()->subDays(3))
      ->orderBy('created_at', 'desc')
      ->take(10)
      ->get();

        return view('VendorDashboard.vendorhome', compact('customerCount', 'totalOrders', 'totalProducts', 'totalEarningsToday', 'salesData', 'ordersData', 'recentActivities','latestOrders'));
    }
    


    public function navbar()
    {
       $vendor = Vendor::find(session('vendor_id'));
       return view('VendorDashboard.VendorHeader', compact('vendor'));
    }

}
