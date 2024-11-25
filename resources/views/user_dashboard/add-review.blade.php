@extends('layouts.user_sidebar')

@section('dashboard-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<h4 class="px-2 py-2">Add Review</h4>
<div class="mt-4">
    <p><strong>Product Name:</strong> {{ $item->product->name }}</p>
    <p><strong>Order Code:</strong> {{ $item->order_code }}</p>

    <form action="{{ route('save.review', $item->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="review" class="form-label">Your Review</label>
            <textarea id="review" name="review" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>


@endsection