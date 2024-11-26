@extends ('AffiliateDashBoard.affmaster')

@section('content')

<!-- Display Success Message -->
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Display Error Message -->
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Display Validation Errors -->
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<style>
    .table thead {
        background-color: #f9f9f9; 
    }

    .form-controls {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .form-controls .btn {
        font-size: 10px;
    }
</style>  

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Tracking Reports</h2>
        <p>Whole data about your business here</p>
    </div>
    
</div>

<main style="margin-top: 20px">
    <div class="container pt-4 px-4"> 

        <div class="card">
            <div class="card-body">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="row align-items-center mb-3 ms-2">
                        <div class="col-md-3 mb-2">
                            <form action="{{ route('traffic_report') }}" method="GET">
                                <label for="tracking_id" class="form-label" style="font-size: 0.8rem;">Select Tracking ID</label>
                                <select id="tracking_id" name="raffle_ticket_id" class="form-select" style="font-size: 0.8rem;">
                                    <option value="" selected>All Tracking IDs</option>
                                    @foreach($raffleTickets as $ticket)
                                        <option value="{{ $ticket->id }}" {{ request('raffle_ticket_id') == $ticket->id ? 'selected' : '' }}>
                                            {{ $ticket->token }}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                    </div>

                    <div class="form-controls mb-3 ms-3">
                        <button type="submit" class="btn btn-primary">View</button>
                        <a href="{{ route('traffic_report') }}" class="btn btn-secondary">Reset</a>
                    </div>
                    </form>

                    <div class="container mt-5 mb-4">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Raffle Ticket</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">View Count</th>
                                        <th scope="col">Referral Count</th>
                                        <th scope="col">Affiliate Commission (LKR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($affiliateReferrals as $referral)
                                        <tr>
                                            <!-- Raffle Ticket Token -->
                                            <td>{{ $referral->raffleTicket ? $referral->raffleTicket->token : 'N/A' }}</td>

                                            <!-- Product Name -->
                                            <td>{{ $referral->product_name }}</td>

                                            <!-- View Count -->
                                            <td>{{ $referral->views_count }}</td>

                                            <!-- Referral Count -->
                                            <td>{{ $referral->referral_count }}</td>

                                            <!-- Affiliate Commission -->
                                            <td>{{ $referral->total_affiliate_price }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No traffic data available for this customer.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
