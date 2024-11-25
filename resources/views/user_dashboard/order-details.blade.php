@extends('layouts.user_sidebar')

@section('dashboard-content')

<h4>Order Details - {{ $order->order_code }}</h4>
<div class="order-details">
    <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Address:</strong> {{ $order->house_no }}, {{ $order->apartment }}, {{ $order->city }}, {{ $order->postal_code }}</p>
    <p><strong>Order Date:</strong> {{ $order->date->format('Y-m-d') }}</p>
    <p><strong>Total Cost:</strong> Rs {{ number_format($order->total_cost, 2) }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>

    <div class="product-details">
        <h5>Product Information</h5>
        <p><strong>Product Name:</strong> {{ $order->product->name }}</p>
        <p><strong>Size:</strong> {{ $order->size }}</p>
        <p><strong>Color:</strong> {{ $order->color }}</p>
        <p><strong>Price:</strong> Rs {{ number_format($order->cost, 2) }}</p>
        <img src="{{ asset('images/' . $order->product->image) }}" alt="Product Image" style="width: 150px; height: 150px;">
    </div>
</div>

@endsection
