@extends('AdminDashboard.master')

@section('content')
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Order List</h2>
    </div>
</div>
<div class="card mb-4">
<header class="card-header">
    <form action="{{ route('orders') }}" method="GET" id="orderSearchForm">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" name="order_code" placeholder="Search order ID" class="form-control" value="{{ request('order_code') }}" oninput="submitForm()"/>
            </div>
            <div class="col-lg-2 col-6 col-md-3">
                <select name="status" class="form-select" onchange="submitForm()">
                    <option value="All" {{ request('status') == 'All' ? 'selected' : '' }}>All</option>
                    <option value="Confirmed" {{ request('status') == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="Paid" {{ request('status') == 'Paid' ? 'selected' : '' }}>Paid</option>
                    <option value="In Progress" {{ request('status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Shipped" {{ request('status') == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                    <option value="Delivered" {{ request('status') == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                </select>
            </div>
        </div>
    </form>
</header>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->order_code }}</td>
                            <td><b>{{ $order->customer_name }}</b></td>
                            <td>{{ $order->email }}</td>
                            <td>Rs. {{ number_format($order->total_cost, 2) }}</td>
                            <td>
                                <span class="status 
                                    {{ strtolower(str_replace(' ', '-', $order->status)) }}">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td>{{ $order->date }}</td>
                            <td class="text-end">
                                <div>
                                    <a href="{{ route('order-details', $order->order_code) }}" class="btn btn-view btn-sm me-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form id="deleteForm{{ $order->id }}" action="{{ route('order.delete', $order->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm{{ $order->id }}', 'Are you sure you want to delete this order?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="pagination-area mt-15 mb-50">
    {{ $orders->links() }}
</div>

<script>
function submitForm() {
    document.getElementById('orderSearchForm').submit();
}
</script>
@endsection
