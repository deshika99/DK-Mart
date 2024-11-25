@extends('layouts.user_sidebar')

@section('dashboard-content')
<style>
    .review-images {
        display: flex;
        gap: 10px;
    }

    .review-images img {
        width: 10%;
        height: auto;
        object-fit: cover;
    }
    .button-tabs {
        display: flex;
        gap: 10px;
    }

    .tab-button {
        padding: 5px 15px;
        border: 1px solid #ced4da;
        background-color: #ffffff;
        color: #6c757d;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-button.active,
    .tab-button:hover {
        background-color: white;
        color: rgb(255, 123, 0);
        border-color: rgb(255, 123, 0);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
    
    .btn-review {
        color: orange !important; /* Text color set to orange */
        background-color: white; /* Background color set to white */
        border: 1px solid orange; /* Border set to orange */
        padding: 4px 28px; /* Add padding for button */
        border-radius: 5px; /* Optional: Round the corners */
        text-decoration: none; /* Remove underline */
        font-weight: bold; /* Make text bold */
        font-size: 14px;
        
    }

    /* Optional: Add hover effect */
    .btn-review:hover {
        background-color: white; /* Background color on hover */
        color: orange !important; /* Text color on hover */
    }

    .order-card {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
    transition: box-shadow 0.3s ease;
}

.order-card:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.order-image img {
    border-radius: 5px;
}


</style>

<h4 class="px-2 py-2">My Reviews</h4>
<div id="all-reviews" class="mt-4">
    @forelse ($orderItems as $item)
        <div class="order-card" style="border: 1px solid #ccc; border-radius: 10px; padding: 15px; margin-bottom: 15px;">
            <div class="order-card-body d-flex align-items-center">
                <!-- Product Image -->
                <div class="order-image" style="margin-right: 15px;">
                    <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}" style="width: 70px; height: 80px;">
                </div>
                
                <!-- Product Info -->
                <div class="order-info" style="font-size: 13px; color: black;">
                    <p><strong>Product Name:</strong> {{ $item->product->name }}</p>
                    <p><strong>Order Code:</strong> {{ $item->order_code }}</p>
                    <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
                    <p><strong>Cost:</strong> Rs {{ number_format($item->cost, 2) }}</p>
                    <p><strong>Order Date:</strong> {{ $item->date->format('Y-m-d') }}</p>
                </div>
                
                <!-- Add Review Button -->
                <div style="margin-left: auto;">
                    <a href="{{ route('add.review', $item->id) }}" class="btn btn-outline-primary btn-sm">Add Review</a>
                </div>
            </div>
        </div>
    @empty
        <p>No items available for review.</p>
    @endforelse
</div>

<!-- Pagination -->
<div class="mt-3 pagination d-flex justify-content-center">
    {{ $orderItems->links() }}
</div>

<!--
<script>
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(this.getAttribute('data-target')).classList.add('active');
        });
    });
</script> -->
@endsection
