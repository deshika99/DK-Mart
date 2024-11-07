<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function getCartCount()
    {
        if (Auth::check()) {
            $cartCount = CartItem::where('user_id', Auth::id())->count();
        } else {
            $cart = session()->get('cart', []);
            $cartCount = count($cart);
        }

        return response()->json(['cart_count' => $cartCount]);
    }

    
    public function showCart()
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return view('frontend.cart')->with('message', 'Please sign in to view your cart and start shopping.')->with('cartItems', collect([])); // Use a collection for an empty cart
        }
    
        // Get the user's ID
        $userId = auth()->user()->id;
    
        // Retrieve cart items from the database as a collection
        $cartItems = CartItem::where('user_id', $userId)->get();
    
        // If cart is empty, show a message
        if ($cartItems->isEmpty()) {
            return view('frontend.cart')->with('message', 'Your cart is empty. Start shopping!')->with('cartItems', collect([])); // Use a collection for an empty cart
        }
    
        // Add product details to each cart item
        foreach ($cartItems as $item) {
            $product = Product::find($item->product_id);
            $productImage = $product->images()->first();
    
            $item->product_name = $product->product_name;
            $item->product_image = $productImage ? $productImage->image_path : '';
            $item->subtotal = $item->price * $item->quantity;
        }
    
        // Pass cart items to the view
        return view('frontend.cart', compact('cartItems'));
    }
    


    public function update(Request $request, CartItem $cartItem)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
    
        $cartItem->quantity = $request->quantity;
        $cartItem->subtotal = $cartItem->product->normal_price * $request->quantity;
        $cartItem->save();
    
        return redirect()->route('cart');
    }
    
    
    

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('cart')->with('success', 'Item removed from cart');
    }

    

    public function addToCart(Request $request)
    {
        try {
            $quantity = $request->input('quantity', 1);
            $productId = $request->input('product_id');
            $size = $request->input('size');
            $color = $request->input('color');
    
            // Validate input
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|integer|min:1',
                'size' => 'nullable|string',
                'color' => 'nullable|string',
            ]);
    
            // Check if user is logged in
            if (!auth()->check()) {
                return redirect()->route('login')->with('error', 'Please log in to add items to the cart.');
            }
    
            $product = Product::findOrFail($productId);
            $price = $product->normal_price; 
    
            if (is_null($price)) {
                return redirect()->back()->with('error', 'Product price is not available.');
            }
    
            $subtotal = $quantity * $price;
    
            $existingCartItem = CartItem::where('user_id', auth()->id())
                ->where('product_id', $productId)
                ->where(function($query) use ($size, $color) {
                    if ($size) {
                        $query->where('size', $size);
                    }
                    if ($color) {
                        $query->where('color', $color);
                    }
                })
                ->first();
    
            if ($existingCartItem) {
                // If the same combination of size/color exists, update the quantity and subtotal
                $existingCartItem->quantity += $quantity;
                $existingCartItem->subtotal = $existingCartItem->quantity * $price; 
                $existingCartItem->save();
                return redirect()->back()->with('success', 'Product added to cart');
            } else {
                // Create a new cart item with the calculated subtotal
                CartItem::create([
                    'user_id' => auth()->id(),
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'size' => $size,
                    'color' => $color,
                    'price' => $price, 
                    'subtotal' => $subtotal, 
                ]);
    
                return redirect()->back()->with('success', 'Product added to cart!');
            }
    
        } catch (\Exception $e) {
           
            return redirect()->back()->with('error', 'Something went wrong while adding the item to your cart.');
        }
    }
    
    
    
    public function checkout()
    {
        $userId = Auth::id();
        $cartItems = CartItem::where('user_id', $userId)->get();

        foreach ($cartItems as $item) {
            $product = Product::find($item->product_id);
            $item->product_name = $product->product_name;
            $item->subtotal = $item->price * $item->quantity;
        }

        $subtotal = $cartItems->sum('subtotal');
        $total = $subtotal + 300; 

        return view('frontend.checkout', compact('cartItems', 'subtotal', 'total'));
    }
    

    

}
