<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerOrderItems;
use App\Models\CustomerOrder;
use App\Models\Product;
use App\Models\Shop;
use Carbon\Carbon;

class VendorDashboardController extends Controller
{


    public function vendorDashboard(Request $request)
    {
        $vendorId = session('vendor_id');
        $today = now()->toDateString(); 

        // Fetch all orders that belong to the vendor
        $orders = CustomerOrder::whereHas('items.product', function ($query) use ($vendorId) {
            $query->whereHas('shop', function ($shopQuery) use ($vendorId) {
                $shopQuery->where('vendor_id', $vendorId);
            });
        })
        ->get();

        $totalOrders = $orders->count();
        $totalProducts = Product::whereHas('shop', function ($query) use ($vendorId) {
            $query->where('vendor_id', $vendorId);
        })
        ->count();

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

        return view('VendorDashboard.vendorhome', compact('totalOrders', 'totalProducts', 'totalEarningsToday'));
    }


    


    public function navbar()
    {
       $vendor = Vendor::find(session('vendor_id'));
       return view('VendorDashboard.VendorHeader', compact('vendor'));
    }

}
