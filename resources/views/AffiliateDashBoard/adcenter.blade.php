@extends ('AffiliateDashBoard.master')

@section('content')

<main>
    <div class="container pt-4 px-4">
        <h3 class="py-3">AD Center</h3>
        <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab0" data-tab="hot_deals">Hot Deals</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="commision-tab0" data-tab="commision">Higher Commission</button>
            </li>
        </ul>

        <div class="card">
            <div class="card-body">
                <div class="tab-content" id="myTabContent0">
                    <!-- Hot Deals -->
                    <div class="tab-pane fade show active" id="hot_deals" role="tabpanel">
                        <div class="container mt-6 mb-5">
                            <div class="row">
                                @foreach($hotDeals as $product)
                                    <div class="col-md-3 mb-7">
                                        <div class="deal-items product-card">
                                            <a href="javascript:void(0)" class="open-modal" data-product-id="{{ $product->product_id }}">
                                                @if($product->images->isNotEmpty())
                                                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->product_name }}" class="img-fluid">
                                                @else
                                                    <img src="{{ asset('storage/default-image.png') }}" alt="Default Image" class="img-fluid">
                                                @endif
                                                <div class="pricee">
                                                    <p>{{ $product->product_name }}</p>
                                                </div>
                                                <div class="price mb-2">Rs.{{ $product->total_price }}</div>
                                                @php
                                                    $commissionPrice = $product->total_price - $product->affiliate_price;
                                                @endphp
                                                <div class="commission mb-2">
                                                    Est. Commission Rs. {{ $commissionPrice }} | {{ $product->commission_percentage }}%
                                                </div>
                                                <button class="btn btn-primary open-modal" data-product-id="{{ $product->product_id }}">
                                                    Promote Now
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- All Modals Placed Outside Card Body -->
        @foreach($hotDeals as $product)
            <div class="custom-modal" id="customModal-{{ $product->product_id }}">
                <div class="custom-modal-content">
                    <span class="custom-close" data-product-id="{{ $product->product_id }}">&times;</span>
                    <h5>Promo Items for {{ $product->product_name }}</h5>
                    <div class="modal-body">
                        <!-- Product Images -->
                        @if($product->images->count() > 0)
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <p>Pictures:</p>
                                </div>
                                <div id="productImagesContainer-{{ $product->product_id }}" class="d-flex flex-wrap">
                                    @foreach($product->images as $image)
                                        <div class="image-wrapper position-relative mb-2 me-2">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="img-fluid" width="100px" data-image-id="{{ $image->id }}" style="cursor: pointer;">
                                            <input type="checkbox" class="position-absolute top-0 start-0 m-2 image-checkbox" style="z-index: 1;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Download Buttons -->
                            <div class="d-flex mb-3">
                                <button onclick="downloadAllImages('{{ $product->product_id }}')" class="btn btn-primary me-2">Download All Images</button>
                                <button onclick="downloadSelectedImages('{{ $product->product_id }}')" class="btn btn-secondary" id="downloadSelectedBtn-{{ $product->product_id }}">Download Selected Images</button>
                            </div>
                        @else
                            <p>No images available for this product.</p>
                        @endif

                        <!-- Promo Link Section -->
                        <div class="mb-3">
                            <label class="form-label">Product Link:</label>
                            <input type="text" value="{{ url('product-details/' . $product->product_id) }}" class="form-control" readonly>
                            <button type="button" class="btn btn-secondary mt-2" onclick="copyLink('{{ url('product-details/' . $product->product_id) }}')">Copy Link</button>
                        </div>


                        <!-- Promo Materials Section -->
                        <div class="mb-3">
                            <h5>Promo Materials</h5>
                            <textarea id="promoMaterial-{{ $product->product_id }}" class="form-control" rows="5" readonly>
                                Product: {{ $product->product_name }}
                                Description: {{ $product->product_description }}
                                Original price: LKR {{ number_format($product->total_price, 2) }}
                            </textarea>
                            <button type="button" class="btn btn-primary mt-2" onclick="copyPromoMaterial('{{ $product->product_id }}')">Copy Promo Material</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

<style>
    /* Custom Modal CSS */
    .custom-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .custom-modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .custom-close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    .custom-close:hover,
    .custom-close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Product Card Background Styling */
    .product-card {
        background-color: #f8f9fa;
        border: 1px solid #e0e0e0;
        padding: 15px;
        border-radius: 8px;
        transition: transform 0.2s ease-in-out;
        text-align: center;
    }

    .product-card img {
        border-radius: 10px;
        height: 150px;
        width: 150px;
    }

    .product-card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Enhanced Styling for Commission */
    .commission {
        background-color: #007bff; /* Blue background for emphasis */
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        text-align: center;
        margin-top: 10px;
        font-size:13px;
        font-weight:bold;
    }

    .pricee p {
        font-size:18px;
        font-weight:bold;
        margin-bottom:10px;
    }
</style>

<script>
    // JavaScript for Custom Modal
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.open-modal').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                document.getElementById(`customModal-${productId}`).style.display = "block";
            });
        });

        document.querySelectorAll('.custom-close').forEach(closeButton => {
            closeButton.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                document.getElementById(`customModal-${productId}`).style.display = "none";
            });
        });

        window.onclick = function(event) {
            document.querySelectorAll('.custom-modal').forEach(modal => {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        };
    });

    // Copy Link to Clipboard
    function copyLink(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert("Copied to clipboard!");
        });
    }

    // Copy Promo Material to Clipboard
    function copyPromoMaterial(productId) {
        const promoMaterial = document.getElementById(`promoMaterial-${productId}`);
        promoMaterial.select();
        navigator.clipboard.writeText(promoMaterial.value).then(() => {
            alert("Promo material copied to clipboard!");
        });
    }

    // Download All Images
    function downloadAllImages(productId) {
        const images = document.querySelectorAll(`#productImagesContainer-${productId} img`);
        images.forEach((img, index) => {
            const link = document.createElement('a');
            link.href = img.src;
            link.download = `image-${index + 1}.jpg`;
            link.click();
        });
    }

    // Download Selected Images
    function downloadSelectedImages(productId) {
        const selectedImages = document.querySelectorAll(`#productImagesContainer-${productId} .image-checkbox:checked`);
        selectedImages.forEach((checkbox, index) => {
            const img = checkbox.previousElementSibling;
            const link = document.createElement('a');
            link.href = img.src;
            link.download = `selected-image-${index + 1}.jpg`;
            link.click();
        });
    }
</script>

@endsection
