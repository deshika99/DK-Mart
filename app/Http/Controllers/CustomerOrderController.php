<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\RaffleTicket;
use App\Models\AffiliateReferral;


class CustomerOrderController extends Controller
{

    public function trackReferral($tracking_id, $product_id)
    {
        // Find the raffle ticket by the tracking ID
        $raffleTicket = RaffleTicket::where('token', $tracking_id)->first();

        if ($raffleTicket) {
            // Find the specific referral record by raffle_ticket_id and product_id
            $referral = AffiliateReferral::where('raffle_ticket_id', $raffleTicket->id)
                                        ->where('product_url', 'like', '%' . $product_id . '%')
                                        ->first();

            if ($referral) {
                // Retrieve the product details to get the affiliate price
                $product = Product::where('product_id', $product_id)->first();

                if ($product && $product->affiliate_price) {
                    // Increment the referral count
                    $referral->increment('referral_count');

                    // Calculate and add the affiliate commission based on affiliate price
                    $referral->total_affiliate_price += $referral->affiliate_commission;
                    $referral->save(); // Save the updated referral with the new commission
                }
            }
        }
    }


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
                Log::warning('Cart is empty for user', ['user_id' => $user->id]);
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
                'status' => 'Pending',
                'payment_method' => $request->input('payment_method', null),
                'payment_status' => 'Pending',
            ]);
    
            $tracking_id = session('tracking_id'); // Retrieve the tracking ID from session
            
            foreach ($cartItems as $cartItem) {
                if (!isset($cartItem->product_id, $cartItem->quantity, $cartItem->price)) {
                    continue;
                }
            
                // Tracking the referral for each cart item
                $this->trackReferral($tracking_id, $cartItem->product_id);  // Corrected to use $cartItem
            
                // Reduce the quantity of the product
                $product = \App\Models\Product::find($cartItem->product_id);
                if ($product) {
                    $product->quantity = max(0, $product->quantity - $cartItem->quantity);
                    $product->save();
                   
                }
            
                CustomerOrderItems::create([
                    'order_code' => $orderCode,
                    'product_id' => $cartItem->product_id,
                    'date' => Carbon::now()->format('Y-m-d'),
                    'cost' => $cartItem->subtotal,
                    'quantity' => $cartItem->quantity,
                    'size' => $cartItem->size ?? null,
                    'color' => $cartItem->color ?? null,
                ]);
            }
    
            // Clear the cart items from the database after the order is placed
            \App\Models\CartItem::where('user_id', $user->id)->delete();

            return redirect()->route('payment', ['order_code' => $orderCode]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while placing the order. Please try again.');
        }
    }
    
    
    


    public function buynow_placeOrder(Request $request)
    {
        $userId = Auth::id();
        $orderCode = 'ORD-' . strtoupper(Str::random(8));
        $deliveryFee = 300;
        $subtotal = 0;

        // Calculate subtotal based on the products in the request
        if ($request->has('products') && is_array($request->products)) {
            foreach ($request->products as $product) {
                $itemSubtotal = $product['cost'] * $product['quantity'];
                $subtotal += $itemSubtotal;
            }
        } else {
            return redirect()->back()->with('error', 'No products selected');
        }

    $total = $subtotal + $deliveryFee;
    
        $order = CustomerOrder::create([
            'order_code' => $orderCode,
            'user_id' => $userId,
            'customer_name' => $request->first_name . ' ' . $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'house_no' => $request->house_no,
            'apartment' => $request->apartment,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'date' => Carbon::now(),
            'total_cost' => $total,
            'status' => 'Pending',
            'payment_method' => $request->input('payment_method', null),
            'payment_status' => 'Pending',
        ]);
    
        if ($request->has('products') && is_array($request->products)) {
            foreach ($request->products as $product) {
                $itemSubtotal = $product['cost'] * $product['quantity'];
    
                CustomerOrderItems::create([
                    'order_code' => $orderCode,
                    'product_id' => $product['product_id'],
                    'quantity' => $product['quantity'],
                    'size' => $product['size'],
                    'color' => $product['color'],
                    'cost' => $itemSubtotal,
                    'date' => Carbon::now(),
                ]);
            }
        } else {
            return redirect()->back()->with('error', 'No products selected');
        }
    
        foreach ($request->products as $product) {
            $productRecord = Product::find($product['product_id']);
            $productRecord->decrement('quantity', $product['quantity']);
        }
    
        return redirect()->route('payment', ['order_code' => $orderCode]);

    }




}
