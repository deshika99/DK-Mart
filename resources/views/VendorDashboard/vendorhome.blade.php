@extends ('VendorDashboard.Vendormaster')

@section('content')
<div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Today Earnings</h6>
                                    <span>Rs {{ number_format($totalEarningsToday, 2) }}</span> <!-- Display total revenue -->
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Orders</h6>
                                    <span>{{ $totalOrders }}</span> <!-- Display total orders -->
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Products</h6>
                                    <span>{{ $totalProducts }}</span> <!-- Display total products -->
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-body mb-4">
                            <article class="icontext">
                                <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-groups"></i></span>
                                <div class="text">
                                    <h6 class="mb-1 card-title">Customers</h6>
                                    <span>{{ $customerCount }}</span>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card mb-4">
                            <article class="card-body">
                                <h5 class="card-title">Sale statistics</h5>
                                <canvas id="myChart" height="120px"></canvas>
                            </article>
                        </div>
                        
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">Recent Activities</h5>
                            <ul class="verti-timeline list-unstyled font-sm">
                                @foreach ($recentActivities as $activity)
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="material-icons md-play_circle_outline font-xxl animation-fade-right"></i>
                                        </div>
                                        <div class="media">
                                            <div class="me-3">
                                                <h6><span>{{ $activity['date'] }}</span> <i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                                            </div>
                                            <div class="media-body">
                                                <div>{{ $activity['message'] }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </article>
                    </div>

                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="text-center">
                                                <div class="form-check align-middle">
                                                    <input class="form-check-input" type="checkbox" id="transactionCheck01" />
                                                    <label class="form-check-label" for="transactionCheck01"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle" scope="col">Order ID</th>
                                            <th class="align-middle" scope="col">Customer Name</th>
                                            <th class="align-middle" scope="col">Date</th>
                                            <th class="align-middle" scope="col">Total</th>
                                            <th class="align-middle" scope="col">Payment Status</th>
                                            <th class="align-middle" scope="col">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($latestOrders as $order)
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="transactionCheck{{ $order->id }}" />
                                                    <label class="form-check-label" for="transactionCheck{{ $order->id }}"></label>
                                                </div>
                                            </td>
                                            <td><a href="#" class="fw-bold">#{{ $order->order_code }}</a></td>
                                            <td>{{ $order->customer_name }}</td> 
                                            <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                            <td>Rs {{ $order->total_cost }}</td>
                                            <td>
                                                <span class="badge badge-pill badge-soft-{{ $order->payment_status == 'Paid' ? 'success' : 'danger' }}">
                                                    {{ $order->payment_status }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('vendor.order-details', $order->order_code) }}" class="btn btn-xs">View details</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table-responsive end// -->
                    </div>
                </div>

<script>
    var salesData = @json($salesData);
    var ordersData = @json($ordersData);
</script>


@endsection