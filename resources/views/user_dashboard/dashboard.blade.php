@extends('layouts.user_sidebar')

@section('dashboard-content')
<style>
    h4.py-2.px-2 {
        margin-bottom: 20px; /* Adjust the value to increase or decrease the space */
    }

    .dashboard-header {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #e0e0e0;
    }

    .profile-info {
        margin-left: 20px;
    }

    .profile-info h4 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }

    .profile-info p {
        margin: 0;
        font-size: 14px;
        color: #888;
    }

    .orders-section {
        margin-top: 30px;
        padding: 20px;
        border-bottom: 1px solid #e0e0e0;
        margin-bottom: 20px;
    }

    .orders-row {
        display: flex;
        justify-content: space-around; /* Adjusts space evenly between items */
        padding: 10px 0;
    }

    .orders-box {
        display: flex;
        flex-direction: column; /* Stack image and text vertically */
        align-items: center; /* Center align items */
        justify-content: center;
        text-align: center;
        width: 100px;
        padding: 10px;
    }

    .orders-box img {
        width: 40px;
        height: 40px;
        margin-bottom: 5px; /* Space between image and text */
    }

    .orders-box p {
        margin: 0; /* Reset margin for better alignment */
        font-size: 12px;
        white-space: nowrap;
    }

    
</style>

<!-- Dashboard Header -->
<h4 class="px-2 py-2">Dashboard</h4>
<div class="dashboard-header">
    <!-- Check if profile_image exists and then display it, otherwise show default -->
    @if (Storage::disk('public')->exists($user->profile_image) && $user->profile_image)
                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-circle" id="profileImagePreview" style="width: 120px; height: 120px;">
            @else
                <img src="{{ asset('images/default-user.png') }}" alt="Default Profile Image" class="rounded-circle" id="profileImagePreview" style="width: 120px; height: 120px;">
            @endif
    <div class="profile-info">
        <h4>Kasuni Gayanthika</h4>
    </div>
</div>

<!-- My Orders Section -->
<div class="orders-section">
    <h5>My Orders</h5>
    <div class="orders-row">
        <div class="orders-box">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/bigmk_app_icon/unpaid-2.png" alt="Unpaid">
            <p>Unpaid</p>
        </div>
        <div class="orders-box">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/cb/to-be-shipped-25.png" alt="To be shipped">
            <p>To be shipped</p>
        </div>
        <div class="orders-box">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/bigmk_app_icon/in-transit.png" alt="Shipped">
            <p>Shipped</p>
        </div>
        <div class="orders-box">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/document-format/reviewed-5.png" alt="To be reviewed">
            <p>To be reviewed</p>
        </div>
    </div>
</div>

@endsection

