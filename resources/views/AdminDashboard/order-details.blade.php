@extends('AdminDashboard.master')

@section('content')

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Order Detail</h2>
        <p>Details for Order ID: {{ $order->order_code }}</p>
    </div>
</div>

<div class="card">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                <span> <i class="material-icons md-calendar_today"></i> <b>{{ \Carbon\Carbon::parse($order->date)->format('D, M d, Y, h:i A') }}</b> </span> <br />
                <small class="text-muted">Order ID: {{ $order->order_code }}</small>
            </div>
            <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                <select class="form-select d-inline-block mb-lg-0 mr-5 mw-200">
                    <option>{{ $order->status }}</option>
                    <option>Awaiting payment</option>
                    <option>Confirmed</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                </select>
                <a class="btn btn-primary p-2" href="#">Update</a>
                <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print"></i></a>
            </div>
        </div>
    </header>
    <div class="card-body">
        <div class="row mb-50 mt-20 order-info-wrap">
            <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-person"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Customer</h6>
                        <p class="mb-1">
                            {{ $order->customer_name }} <br />
                            {{ $order->email }} <br />
                            {{ $order->phone }}
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-local_shipping"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Shipping Details</h6>
                        <p class="mb-1">
                            Address: {{ $order->shipping_method }} <br />
                            City: {{ $order->city }} <br />
                            Postal code: {{ $order->postal_code }} <br />
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="icontext align-items-start">
                    <span class="icon icon-sm rounded-circle bg-primary-light">
                        <i class="text-primary material-icons md-place"></i>
                    </span>
                    <div class="text">
                        <h6 class="mb-1">Billing Details </h6>
                        <p class="mb-1">
                        Pay method: {{ $order->payment_method }} <br />
                        Amount charged: Rs {{ $order->total_cost }} <br />
                        Status: {{ $order->payment_status }}
                        </p>
                    </div>
                </article>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="50%">Product</th>
                                <th width="20%">Unit Price</th>
                                <th width="5%">Quantity</th>
                                <th width="20%" class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                    <td>
                                        <a class="itemside" href="#">
                                            <div class="left">
                                            <img src="{{ asset('storage/' . $item->product->image_path) }}" width="40" height="40" class="img-xs" alt="Item" />
                                            </div>
                                            <div>{{ $item->product->product_name }}</div>
                                        </a>
                                    </td>
                                    <td>Rs {{ $item->cost }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td class="text-end">Rs {{ $item->cost * $item->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Order Summary Card -->
            <div class="col-lg-4">
                <div class="card shadow-sm bg-light">
                    <div class="card-body">
                        <h6 class="mb-3">Order Summary</h6>
                        <dl class="dlist">
                            <dt>Subtotal:</dt>
                            <dd>Rs {{ $order->total_cost - 300 }}</dd>
                        </dl>
                        <dl class="dlist">
                            <dt>Delivery Fee:</dt>
                            <dd>Rs 300.00</dd>
                        </dl>
                        <dl class="dlist">
                            <dt class="h5">Total:</dt>
                            <dd><b class="h5">Rs {{ number_format($order->total_cost, 2) }}</b></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
