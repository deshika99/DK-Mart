@extends ('AffiliateDashBoard.master')

@section('content')

<!-- Display Messages -->
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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

<!-- Content Header -->
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Affiliate Dashboard</h2>
        <p>Whole data about your business here</p>
    </div>
    
</div>

<!-- Metrics Section -->
<div class="row" style="margin-top:20px">
    <!-- Total Referrals Card -->
    <div class="col-lg-3">
        <div class="card card-body mb-4 bg-gradient-warning text-white">
            <article class="icontext d-flex align-items-center">
                <i class="fas fa-shopping-cart" style="font-size: 2.5rem; color: #ffc107; margin-right: 15px;"></i>
                <div class="text">
                    <h6 class="mb-1 card-title text-light">Total Referrals</h6>
                    <span style="font-size: 1.5rem; font-weight: bold; color: #333">{{ $totalReferrals }}</span>
                </div>
            </article>
        </div>
    </div>

    <!-- Total Views Card -->
    <div class="col-lg-3">
        <div class="card card-body mb-4 bg-gradient-success text-white">
            <article class="icontext d-flex align-items-center">
                <i class="fas fa-eye" style="font-size: 2.5rem; color: #81c784; margin-right: 15px;"></i>
                <div class="text">
                    <h6 class="mb-1 card-title text-light">Total Views</h6>
                    <span style="font-size: 1.5rem; font-weight: bold; color: #333">{{ $totalViews }}</span>
                </div>
            </article>
        </div>
    </div>

    <!-- Paid Earnings Card -->
    <div class="col-lg-3">
        <div class="card card-body mb-4 bg-gradient-danger text-white">
            <article class="icontext d-flex align-items-center">
                <i class="fas fa-wallet" style="font-size: 2.5rem; color: #f44336; margin-right: 15px;"></i>
                <div class="text">
                    <h6 class="mb-1 card-title text-light">Paid Earnings</h6>
                    <span style="font-size: 1.5rem; font-weight: bold; color: #333">LKR {{ number_format($completedPayments, 2) }}</span>
                </div>
            </article>
        </div>
    </div>

    <!-- Account Balance and Withdraw Card -->
    <div class="col-lg-3">
        <div class="card card-body mb-4 bg-gradient-info text-white">
            <article class="icontext d-flex align-items-center">
                <i class="fas fa-university" style="font-size: 2.5rem; color: #4dd0e1; margin-right: 15px;"></i>
                <div class="text">
                    <h6 class="mb-1 card-title text-light">Account Balance</h6>
                    <span style="font-size: 1.5rem; font-weight: bold; color: #333">LKR {{ number_format($totalPaidEarnings, 2) }}</span>
                </div>
            </article>
            <div class="text-center mt-3">
                <a href="{{ route('withdrawals') }}" class="btn btn-light btn-sm" style="font-weight: bold; color: #007bff;">Withdraw</a>
            </div>
        </div>
    </div>
</div>



<!-- Charts Section -->
<div class="row">
    <div class="col-xl-8 col-lg-12 mb-4">
        <div class="card">
            <article class="card-body">
                <h5 class="card-title">Referrals Over the Last 12 Months</h5>
                <div id="referralsChart"></div>
            </article>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 mb-4">
        <div class="card">
            <article class="card-body">
                <h5 class="card-title">Earnings Distribution</h5>
                <div id="earningsChart"></div>
            </article>
        </div>
    </div>
</div>



<!-- ApexCharts Scripts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Referrals Over Time (Line Chart)
        var referralOptions = {
            series: [{
                name: 'Referrals',
                data: @json($referralsOverMonths)
            }],
            chart: {
                type: 'line',
                height: 300,
                toolbar: { show: false }
            },
            colors: ['#4CAF50'],
            xaxis: {
                categories: @json($months),
                labels: { style: { colors: '#6c757d' } }
            },
            yaxis: { labels: { style: { colors: '#6c757d' } } },
            stroke: { curve: 'smooth', width: 2 }
        };
        var referralChart = new ApexCharts(document.querySelector("#referralsChart"), referralOptions);
        referralChart.render();

        // Earnings Distribution (Donut Chart)
        var earningsOptions = {
            series: [@json($completedPayments), @json($totalPaidEarnings)],
            chart: {
                type: 'donut',
                height: 250,
            },
            labels: ['Withdrawn Amount', 'Account Balance'],
            colors: ['#FFC107', '#4CAF50'],
            plotOptions: {
                pie: {
                    donut: { size: '65%' }
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: { width: '100%' },
                    legend: { position: 'bottom' }
                }
            }]
        };
        var earningsChart = new ApexCharts(document.querySelector("#earningsChart"), earningsOptions);
        earningsChart.render();
    });
</script>

@endsection
