<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CustomerOrderController extends Controller
{

    public function placeOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'house_no' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        try {
            $user = Auth::user();
            
            $cartItems = \App\Models\CartItem::where('user_id', $user->id)->get();
    
            // Check if cart is empty
            if ($cartItems->isEmpty()) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }
    
            $orderCode = 'ORD-' . strtoupper(Str::random(8));
    
            // Calculate order totals
            $subtotal = $cartItems->sum('subtotal');
            $deliveryFee = 300.00;
            $totalCost = $subtotal + $deliveryFee;
    
            $customerName = $request->input('first_name') . ' ' . $request->input('last_name');
    
            $order = CustomerOrder::create([
                'order_code' => $orderCode,
                'user_id' => $user->id,
                'customer_name' => $customerName,
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'house_no' => $request->input('house_no'),
                'apartment' => $request->input('apartment'),
                'city' => $request->input('city'),
                'postal_code' => $request->input('postal_code'),
                'date' => Carbon::now()->format('Y-m-d'),
                'total_cost' => $totalCost,
                'status' => 'Confirmed',
                'payment_method' => $request->input('payment_method', null),
                'payment_status' => 'Pending',
            ]);
    
            // Save each item to the customer_order_items table
            foreach ($cartItems as $item) {

                if (!isset($item->product_id, $item->quantity, $item->price)) {
                    continue; 
                }
    
                    CustomerOrderItems::create([
                        'order_code' => $orderCode,
                        'product_id' => $item->product_id,
                        'date' => Carbon::now()->format('Y-m-d'),
                        'cost' => $item->subtotal,
                        'quantity' => $item->quantity,
                        'size' => $item->size ?? null,
                        'color' => $item->color ?? null,
                    ]);
    
            }
    
            // Clear the cart items from the database after the order is placed
            \App\Models\CartItem::where('user_id', $user->id)->delete();
    
            return redirect()->route('checkout')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while placing the order. Please try again.');
        }
    }
    
    

    
}
