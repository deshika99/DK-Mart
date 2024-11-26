
@extends ('frontend.master')

@section('content')

    

    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Vendor Details</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="index.html" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Vendor Details </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->
<!-- ============================== Vendor Two Details Start =============================== -->
<section class="vendor-two-details py-80">
    <div class="container container-lg">
        <div class="vendor-two-details-wrapper d-flex flex-wrap align-items-start gap-24">

            <!-- Shop Sidebar Start -->
            <div class="shop-sidebar">
                <button type="button" class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 text-white border-main-600">
                    <i class="ph ph-x"></i>
                </button>
                <div class="d-flex flex-column gap-12 px-lg-0 px-3 py-lg-0 py-4">
                    <div class="bg-neutral-600 rounded-8 p-24">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="w-80 h-80 flex-center bg-white rounded-8 flex-shrink-0">
                                @if ($vendornew->shop->shop_logo)
                                    <img src="{{ asset('storage/' . $vendornew->shop->shop_logo) }}" alt="" class="cover-img rounded-8">
                                @else
                                    <img src="assets/images/default-shop-logo.png" alt="Default Logo" class="cover-img rounded-8">
                                @endif
                            </span>
                        </div>
                        <div class="mt-32">
                        <h6 class="text-white fw-semibold mb-12">
                            <a href="" class="">{{ $vendornew->shop->shop_name }}</a> 
                        </h6>
                            <div class="flex-align gap-6">
                                <div class="flex-align gap-8">
                                    <!-- Dynamic star rating -->
                                    @for ($i = 0; $i < 5; $i++)
                                        <span class="text-15 fw-medium text-warning-600 d-flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                    @endfor
                                </div>
                                <span class="text-xs fw-medium text-white">{{ $vendornew->rating }}</span>
                                <span class="text-xs fw-medium text-white">({{ $vendornew->reviews_count }} reviews)</span>
                            </div>
                            <div class="vendors-two-item__content mt-16 flex-grow-1">
                                <div class="d-flex flex-column gap-14">
                                    <div class="flex-align gap-8">
                                        <span class="flex-center text-main-two-600 text-2xl flex-shrink-0">
                                            <i class="ph ph-map-pin-line text-white"></i>
                                        </span>
                                        <p class="text-md text-white">{{ $vendornew->address }}</p>
                                    </div>
                                    <div class="flex-align gap-8">
                                        <span class="flex-center text-main-two-600 text-2xl flex-shrink-0">
                                            <i class="ph ph-envelope-simple text-white"></i>
                                        </span>
                                        <a href="mailto:{{ $vendornew->email }}" class="text-md text-white hover-text-main-60">{{ $vendornew->email }}</a>
                                    </div>
                                    <div class="flex-align gap-8">
                                        <span class="flex-center text-main-two-600 text-2xl flex-shrink-0">
                                            <i class="ph ph-phone text-white"></i>
                                        </span>
                                        <a href="tel:{{ $vendornew->phone }}" class="text-md text-white hover-text-main-60">{{ $vendornew->phone }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-32 d-flex flex-column gap-8">
                       
                        </div>
                    </div>
                    <div class="border border-gray-50 rounded-8 p-24">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Product Category</h6>
                        <ul class="max-h-540 overflow-y-auto scroll-sm">
                        <!-- All Categories Link -->
                            <li class="mb-24">
                                <a href="{{ request()->url() }}" 
                                class="text-gray-900 hover-text-main-600 {{ request('category_id') == null ? 'font-weight-bold' : '' }}">
                                All Categories
                                </a>
                            </li>
                            
                            <!-- Loop Through Categories -->
                            @foreach($categories as $category)
                                <li class="mb-24">
                                    <!-- Add the category filter link with the 'category_id' parameter -->
                                    <a href="{{ request()->url() }}?category_id={{ $category->id }}" 
                                    class="text-gray-900 hover-text-main-600 {{ request('category_id') == $category->id ? 'font-weight-bold' : '' }}">
                                    {{ $category->name }} 
                                    </a>
                                
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
            <!-- Shop Sidebar End -->

            <div class="vendor-two-details__contents">
                <!-- Search Filter Start -->
                <div class="d-flex align-items-center justify-content-between flex-wrap mt-40 mb-32 gap-16">
                    <div class="d-flex align-items-center justify-content-between justify-content-sm-end gap-16 flex-grow-1">
                        <span class="text-gray-900">Showing 1-20 of {{ $products->total() }} result</span>  
                        <div class="d-flex align-items-center gap-8 d-sm-flex d-none">
                            <button type="button" class="grid-btn text-2xl d-flex w-48 h-48 border border-neutral-100 rounded-8 justify-content-center align-items-center border-main-600 text-white bg-main-600"><i class="ph ph-squares-four"></i></button>
                            <button type="button" class="list-btn text-2xl d-flex w-48 h-48 border border-neutral-100 rounded-8 justify-content-center align-items-center"><i class="ph ph-list-bullets"></i></button>
                        </div>
                        <button type="button" class="w-48 h-48 d-lg-none d-flex flex-center border border-gray-100 rounded-6 text-2xl sidebar-btn">
                           <i class="ph-bold ph-funnel"></i>
                       </button>
                    </div>
                </div>
                <!-- Search Filter End -->

               <!-- Products Start --> 
                <div class="list-grid-wrapper grid-cols-4">
                    @forelse($products as $product)
                        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <div class="product-card__thumb rounded-8 bg-gray-50 position-relative">
                                <a href="{{ route('showProductDetails', $product->product_id) }}" class="w-100 h-100 flex-center">
                                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="max-w-unset">
                                </a>
                            </div>
                            <div class="product-card__content mt-16">
                                <h5 class="text-lg fw-semibold mb-8">
                                    <a href="{{ route('showProductDetails', $product->product_id) }}" class="text-gray-900">{{ $product->product_name }}</a>
                                </h5>
                                <div class="flex-align gap-6">
                                    <div class="flex-align gap-8">
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-xs fw-medium text-gray-500">4.8</span>
                                    <span class="text-xs fw-medium text-gray-500">(12K)</span>
                                </div>
                                <div class="product-card__price mt-16 mb-30">
                                    <span class="text-heading text-md fw-semibold ">Rs {{ number_format($product->normal_price, 2) }}<span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>
                                <a href="#" 
                                    style="width:230px" 
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium add-to-cart-btn" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#cartModal_{{ $product->product_id }}" 
                                    data-product-id="{{ $product->product_id }}">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                </a>
                            </div>
                        </div>
                         <!-- Cart Modal -->
                         <div class="modal fade" id="cartModal_{{ $product->product_id }}" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="p-6 modal-content" style="border-radius: 0;">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row gx-5">
                                            <aside class="col-lg-5">
                                                <div class="mb-3 rounded-4 d-flex justify-content-center">
                                                    <a class="rounded-4 main-image-link" href="{{ asset('storage/' . $product->images->first()->image_path) }}">
                                                        <img id="mainImage" class="rounded-4 fit" src="{{ asset('storage/' . $product->images->first()->image_path) }}" style="width:250px" />
                                                    </a>
                                                </div>
                                                <div class="mb-3 d-flex justify-content-center">
                                                    @foreach($product->images as $image)
                                                        <a class="mx-1 rounded-2 thumbnail-image" data-image="{{ asset('storage/' . $image->image_path) }}" href="javascript:void(0);">
                                                            <img class="thumbnail rounded-2" src="{{ asset('storage/' . $image->image_path) }}" style="width:80px" />
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </aside>

                                            <main class="col-lg-7">
                                                <h6>{{ $product->product_name }}</h6>
                                                <p class="product-description">{{ $product->product_description }}</p>
                                                <div class="flex-wrap gap-12 mt-12 flex-align">
                                                    <div class="flex-wrap gap-12 flex-align">
                                                        <div class="gap-8 flex-align">
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-sm fw-medium text-neutral-600">4.7 Star Rating</span>
                                                        <span class="text-sm text-gray-500 fw-medium">(21,671)</span>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                <div class="mt-3 mb-12 product-availability">
                                                    <span>Availability :</span>
                                                    @if($product->quantity > 1)
                                                        <span class="ms-1" style="color:#4caf50;">In stock</span>
                                                    @else
                                                        <span class="ms-1" style="color:red;">Out of stock</span>
                                                    @endif
                                                </div>

                                                 <!-- Sizes Section -->
                                                @if ($product->variations->pluck('value')->filter()->unique()->isNotEmpty())
                                                    <div class="flex-wrap gap-16 mb-8 flex-between align-items-start">
                                                        <div class="mb-5 d-flex align-items-center">
                                                            <span class="text-gray-900 me-3">Size:</span>
                                                            @foreach ($product->variations->pluck('value')->filter()->unique() as $size)
                                                                <button type="button" 
                                                                        class="border border-2 border-gray-300 size_button ms-5 d-flex align-items-center justify-content-center"
                                                                        data-size="{{ $size }}">
                                                                    {{ $size }}
                                                                </button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif

                                            
                                                <!-- Colors Section -->
                                                @if ($product->variations->pluck('hex_value')->filter()->unique()->isNotEmpty())
                                                    <div class="flex-wrap gap-16 mt-4 flex-between align-items-center">
                                                        <div class="mb-4 d-flex align-items-center">
                                                            <span class="text-gray-900 me-3">Color:</span>
                                                            @foreach ($product->variations->pluck('hex_value')->filter()->unique() as $color)
                                                                <button type="button" 
                                                                        class="w-24 h-24 border border-2 color-list__button border-gray-50 rounded-circle me-2"
                                                                        style="background-color: {{ $color }};" 
                                                                        data-color="{{ $color }}"> 
                                                                </button>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="mt-8 mb-3 product-price d-flex align-items-center">
                                                    <span class="" style="margin-right: 10px;">                                                   
                                                    <h6 class="mb-0">Rs {{ $product->normal_price }}</h6>
                                                    </span>
                                                </div>

                                                @auth
                                                    <!-- Add To Cart Form -->
                                                    <form action="{{ route('cart.add') }}" method="POST" id="addToCartForm">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="size" id="selectedSize">
                                                        <input type="hidden" name="color" id="selectedColor">
                                                        <input type="hidden" name="quantity" id="hiddenQuantity" value="1">
                                                        <input type="hidden" name="price" id="hiddenPrice" value="{{ $product->normal_price }}">

                                                        <!-- Add To Cart Button -->
                                                        <button type="submit" class="mt-5 btn btn-main w-95" 
                                                                @if ($product->quantity == 0) disabled @endif>
                                                            Add To Cart
                                                        </button>
                                                    </form>
                                                @else
                                                    <p class="mb-5 text-danger">Please <a href="{{ route('login') }}">log in</a> to add items to the cart.</p>
                                                @endauth
                                                <a href="{{ route('showProductDetails', $product->product_id ) }}" style="text-decoration: none; font-size:14px; color: #297aa5; margin-top:15px">
                                                    View Full Details<i class="fa-solid fa-circle-right"></i>
                                                </a>
                                            </main>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <p class="text-gray-500 mt-4">No products found.</p>
                        
                    @endforelse
                </div>
                <!-- Products End -->

              
                <!-- Pagination Start -->
                <div class="pagination mt-40">
                    {{ $products->links() }}  
                </div>
                <!-- Pagination End -->
            </div>

        </div>
    </div>
</section>
<!-- ============================== Vendor Two Details End =============================== -->




<script>
document.addEventListener('DOMContentLoaded', function() {
    // Track the selected size and color
    let selectedSize = null;
    let selectedColor = null;
    const productHasSize = document.querySelectorAll('.size_button').length > 0;
    const productHasColor = document.querySelectorAll('.color-list__button').length > 0;

    // Add event listener for size buttons
    document.querySelectorAll('.size_button').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.size_button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            selectedSize = button.getAttribute('data-size'); 
            document.getElementById('selectedSize').value = selectedSize; 
        });
    });

    // Add event listener for color buttons
    document.querySelectorAll('.color-list__button').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.color-list__button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            selectedColor = button.getAttribute('data-color'); 
            document.getElementById('selectedColor').value = selectedColor; 
        });
    });

    // Handle Add to Cart form submission
    document.getElementById('addToCartForm').addEventListener('submit', function(e) {
        // Check if size/color are required and selected
        if ((productHasSize && !selectedSize) || (productHasColor && !selectedColor)) {
            e.preventDefault(); 
            Swal.fire({
                title: 'Warning!',
                text: 'Please select both a size and a color to proceed.',
                icon: 'warning',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        }
    });

   
}); 

</script>

    @endsection