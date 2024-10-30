@extends ('AdminDashboard.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3 class="text-center text-primary mb-4">Product Details</h3>
                
                <!-- Product Info & Affiliate Details in Compact Grid -->
                <div class="row mb-3">
                    <div class="col-6 mb-2">
                        <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
                        <p><strong>Name:</strong> {{ $product->product_name }}</p>
                        <p><strong>Category:</strong> <span class="badge bg-info text-white">{{ $product->category->name ?? 'N/A' }}</span></p>
                        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><strong>Price:</strong> Rs. {{ $product->total_price }}</p>
                        @if($product->is_affiliate)
                            <p><strong>Affiliate Price:</strong> Rs. {{ $product->affiliate_price }}</p>
                            <p><strong>Commission %:</strong> {{ $product->commission_percentage }}%</p>
                            <p><strong>Total Affiliate Price:</strong> Rs. {{ $product->total_price }}</p>
                        @endif
                    </div>
                </div>

                <!-- Product Description Section -->
                <div class="mb-4">
                    <h5 class="text-secondary">Description</h5>
                    <p class="text-muted">{{ $product->product_description ?? 'No description available.' }}</p>
                </div>

                <!-- Images Section -->
                <h5 class="text-secondary mt-4">Product Images</h5>
                <div class="d-flex flex-wrap mt-2">
                    @if($product->images->isNotEmpty())
                        @foreach($product->images as $image)
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-thumbnail me-2 mb-2" style="width: 12%;" alt="Product Image" />
                        @endforeach
                    @else
                        <p class="text-muted">No images available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
