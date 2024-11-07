@extends ('frontend.master')

@section('content')
<style>
    .size_button {
    padding: 5px;;
    font-size: 13px;
    border-radius: 5px;
    border-color: #ccc; 
    width: 30px;
    height: 30px;
}
.size_button.active, .color-list__button.active {
    border-color: #007bff; 
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

a.disabled {
    pointer-events: none;
    opacity: 0.6;
    cursor: not-allowed;
}

</style>
 <!-- ========================= Breadcrumb Start =============================== -->
 <div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0"> Product Details</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="/home" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> {{ $product->product_name }} </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->


  <!-- ========================== Product Details Two Start =========================== -->
  <section class="product-details py-80">
    <div class="container container-lg" style="width:90%">
        <div class="row gy-4">
            <div class="col-xl-9">
                <div class="row gy-4">
                    <div class="col-xl-5">
                        <div class="product-details__left"> 
                            <div class="product-details__thumb-slider border border-gray-100 rounded-16">
                                @foreach ($product->images as $image)
                                    <div class="">
                                        <div class="product-details__thumb flex-center">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->product_name }}" class="img-responsive rounded-15">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-24">
                                <div class="product-details__images-slider">
                                    @foreach ($product->images as $image)
                                        <div>
                                            <div class="max-w-120 max-h-120 h-100 flex-center border border-gray-100 rounded-15 p-0">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $product->product_name }}" class="img-responsive rounded-15">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6">
                        <div class="product-details__content">
                            
                            <div class="flex-center mb-24 flex-wrap gap-16 bg-color-one rounded-8 py-16 px-24 position-relative z-1">
                                <img src="{{ asset('/frontend/assets/images/bg/details-offer-bg.png') }}" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1">
                                <div class="flex-align gap-16">
                                    <span class="text-white text-sm">Special Offer:</span>
                                </div>
                                <div class="countdown" id="countdown11">
                                    <ul class="countdown-list flex-align flex-wrap">
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="days"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="hours"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="minutes"></span></li>
                                        <li class="countdown-list__item text-heading flex-align gap-4 text-xs fw-medium w-28 h-28 rounded-4 border border-main-600 p-0 flex-center"><span class="seconds"></span></li>
                                    </ul>
                                </div>
                                <span class="text-white text-xs">Remains untill the end of the offer</span>
                            </div>
                            
                            <h5 class="mb-12">{{ $product->product_name }}</h5>
                            <div class="flex-align flex-wrap gap-12">
                                <div class="flex-align gap-12 flex-wrap">
                                    <div class="flex-align gap-8">
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    </div>
                                    <span class="text-sm fw-medium text-neutral-600">4.7 Star Rating</span>
                                    <span class="text-sm fw-medium text-gray-500">(21,671)</span>
                                </div>
                            </div>
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>

                            <div class="my-0 flex-align gap-16 flex-wrap">
                                <div class="flex-align gap-8">
                                    <div class="flex-align gap-8 text-main-two-600">
                                        <i class="ph-fill ph-seal-percent text-xl"></i>
                                        -10%
                                    </div>
                                    <h6 class="mb-0">Rs {{ $product->normal_price }}</h6>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-gray-700">Regular Price</span>
                                    <h6 class="text-xl text-gray-400 mb-0 fw-medium">Rs 5500.00</h6>
                                </div>
                            </div>
                            
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>

                            <div class="">
                                <p class="mb-10 text-black">
                                    Availability: 
                                    @if ($product->quantity > 0)
                                        <span class="text-success-600">In Stock</span>
                                    @else
                                        <span class="text-danger-600">Out of Stock</span>
                                    @endif
                                </p>
                              <!-- Sizes Section -->
                            @if ($product->variations->pluck('value')->filter()->unique()->isNotEmpty())
                                <div class="flex-between align-items-start flex-wrap gap-16">
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="text-gray-900 me-3">Size:</span>
                                        @foreach ($product->variations->pluck('value')->filter()->unique() as $size)
                                            <button type="button" 
                                                    class="size_button ms-5 border border-2 border-gray-300 d-flex align-items-center justify-content-center"
                                                    data-size="{{ $size }}">
                                                {{ $size }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Colors Section -->
                            @if ($product->variations->pluck('hex_value')->filter()->unique()->isNotEmpty())
                                <div class="flex-between align-items-center flex-wrap gap-16 mt-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <span class="text-gray-900 me-3">Color:</span>
                                        @foreach ($product->variations->pluck('hex_value')->filter()->unique() as $color)
                                            <button type="button" 
                                                    class="color-list__button w-24 h-24 border border-2 border-gray-50 rounded-circle me-2"
                                                    style="background-color: {{ $color }};"
                                                    data-color="{{ $color }}">
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            </div>
                            
                            <span class="mt-32 pt-32 text-gray-700 border-top border-gray-100 d-block"></span>
                            <div class="mt-0">
                                <span class="fw-medium text-gray-900">100% Guarantee Safe Checkout</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="product-details__sidebar py-40 px-32 border border-gray-100 rounded-16">
                    <div class="mb-32">
                        <label for="stock" class="text-lg mb-8 text-heading fw-semibold d-block">Total Stock: {{ $product->quantity }}</label>
                        <span class="text-xl d-flex">
                            <i class="ph ph-location"></i>
                        </span>
                        <div class="d-flex rounded-4 overflow-hidden">
                            <button type="button" class="quantity__minus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex-center hover-bg-main-600 hover-text-white">
                                <i class="ph ph-minus"></i>
                            </button>
                            <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-16" id="quantityInput" name="quantity" value="1" min="1">
                            <button type="button" class="quantity__plus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex-center hover-bg-main-600 hover-text-white">
                                <i class="ph ph-plus"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="mb-32">
                        <div class="flex-between flex-wrap gap-8 border-bottom border-gray-100 pb-16 mb-16">
                            <span class="text-gray-500">Price</span>
                            <h6 class="text-lg mb-0 price-display">{{ $product->normal_price }}</h6>
                        </div>
                        <div class="flex-between flex-wrap gap-8">
                            <span class="text-gray-500">Shipping</span>
                            <h6 class="text-lg mb-0">Rs 350.00</h6>
                        </div>
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
                            <button type="submit" class="btn btn-main w-100" 
                                    @if ($product->quantity == 0) disabled @endif>
                                Add To Cart
                            </button>
                        </form>

                    <!-- Buy Now Button -->
                    <a href="#" id="buyNowBtn" class="btn btn-outline-main rounded-8 fw-normal mt-16 w-100 @if ($product->quantity == 0) disabled @endif">
                        Buy Now
                    </a>

                    @else
                        <p class="text-danger">Please <a href="{{ route('login') }}">log in</a> to add items to the cart.</p>
                    @endauth

                    <div class="mt-32">
                        <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-14">
                            <span class="w-32 h-32 bg-white text-main-600 rounded-circle flex-center text-xl flex-shrink-0">
                                <i class="ph-fill ph-truck"></i>
                            </span>
                            <span class="text-sm text-neutral-600">Ship from <span class="fw-semibold">DK Mart</span> </span>
                        </div>
                        <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-0">
                            <span class="w-32 h-32 bg-white text-main-600 rounded-circle flex-center text-xl flex-shrink-0">
                                <i class="ph-fill ph-storefront"></i>
                            </span>
                            <span class="text-sm text-neutral-600">Sold by:  <span class="fw-semibold">MR Distribution </span> </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-80">
            <div class="product-dContent border rounded-24">
                <div class="product-dContent__header border-bottom border-gray-100 flex-between flex-wrap gap-16">
                    <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <a href="#" class="btn bg-color-one rounded-16 flex-align gap-8 text-main-600 hover-bg-main-600 hover-text-white">
                        <img src="{{ asset('/frontend/assets/images/icon/satisfaction-icon.png') }}" alt="">
                        100% Satisfaction Guaranteed
                    </a>
                </div>
                <div class="product-dContent__box">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                            <div class="mb-40">
                                <h6 class="mb-24">Product Description</h6>
                                <p>{{ $product->product_description }}</p>
                            </div>
                            <div class="mb-40">
                                <h6 class="mb-24">Product Specifications</h6>
                                <ul class="mt-32">
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                        <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                            <i class="ph ph-check"></i>
                                        </span>
                                        <span class="text-heading fw-medium">
                                            Available sizes: 
                                            <span class="text-gray-500">
                                                {{ implode(', ', $product->variations->pluck('value')->filter()->unique()->toArray()) }}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="text-gray-400 mb-14 flex-align gap-14">
                                    <span class="w-20 h-20 bg-main-50 text-main-600 text-xs flex-center rounded-circle">
                                        <i class="ph ph-check"></i>
                                    </span>
                                        <span class="text-heading fw-medium">
                                            Available colors: 
                                            <span class="text-gray-500  gap-4">
                                                @foreach($product->variations->pluck('hex_value')->filter()->unique() as $color)
                                                    <span class="w-14 h-14 rounded-circle" style="background-color: {{ $color }};"></span>
                                                @endforeach
                                            </span>
                                        </span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h6 class="mb-24">Product Description</h6>
                                    <div class="d-flex align-items-start gap-24 pb-44 border-bottom border-gray-100 mb-44">
                                        <img src="{{ asset('/frontend/assets/images/icon/default-user.png') }}" alt="" class="w-52 h-52 object-fit-cover rounded-circle flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <div class="flex-between align-items-start gap-8 ">
                                                <div class="">
                                                    <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                    <div class="flex-align gap-8">
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                </div>
                                                <span class="text-gray-800 text-xs">3 Days ago</span>
                                            </div>
                                            <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                            <p class="text-gray-700">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>

                                            <div class="flex-align gap-20 mt-44">
                                                <button class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-thumbs-up"></i>
                                                    Like
                                                </button>
                                                <a href="#comment-form" class="flex-align gap-12 text-gray-700 hover-text-main-600">
                                                    <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                    Replay
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-56">
                                        <div class="">
                                            <h6 class="mb-24">Write a Review</h6>
                                            <span class="text-heading mb-8">What is it like to Product?</span>
                                            <div class="flex-align gap-8">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="mt-32">
                                            <form action="#">   
                                                <div class="mb-32">
                                                    <label for="title" class="text-neutral-600 mb-8">Review Title</label>
                                                    <input type="text" class="common-input rounded-8" id="title" placeholder="Great Products">
                                                </div>
                                                <div class="mb-32">
                                                    <label for="desc" class="text-neutral-600 mb-8">Review Content</label>
                                                    <textarea class="common-input rounded-8" id="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-main rounded-pill mt-48">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ms-xxl-5">
                                        <h6 class="mb-24">Customers Feedback</h6>
                                        <div class="d-flex flex-wrap gap-44">
                                            <div class="border border-gray-100 rounded-8 px-40 py-52 flex-center flex-column flex-shrink-0 text-center">
                                                <h2 class="mb-6 text-main-600">4.8</h2>
                                                <div class="flex-center gap-8">
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                </div>
                                                <span class="mt-16 text-gray-500">Average Product Rating</span>
                                            </div>
                                            <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow-1">
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">5</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 70%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">124</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">4</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 50%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">52</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">3</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 35%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">12</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-20">
                                                    <span class="text-gray-900 flex-shrink-0">2</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 20%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">5</span>
                                                </div>
                                                <div class="flex-align gap-8 mb-0">
                                                    <span class="text-gray-900 flex-shrink-0">1</span>
                                                    <div class="progress w-100 bg-gray-100 rounded-pill h-8" role="progressbar" aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-main-600 rounded-pill" style="width: 5%"></div>
                                                    </div>
                                                    <div class="flex-align gap-4">
                                                        <span class="text-xs fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-xs fw-medium text-gray-400 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="text-gray-900 flex-shrink-0">2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- ========================== Product Details Two End =========================== -->

<!-- ========================== Similar Product Start ============================= -->
<section class="new-arrival pb-80">
    <div class="container container-lg" style="width: 90%">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">You Might Also Like</h5>
                <div class="flex-align gap-16">
                    <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">All Products</a>
                    <div class="flex-align gap-8">
                        <button type="button" id="new-arrival-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="new-arrival-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-arrival__slider arrow-style-two">
        @foreach($similarProducts as $similarProduct)
        <div>
            <div class="product-card h-100 p-8 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                <a href="{{ route('showProductDetails', $similarProduct->product_id) }}" class="product-card__thumb flex-center">
                    <img src="{{ asset('storage/' . $similarProduct->images->first()->image_path) }}" alt="{{ $similarProduct->name }}" style="width: 200px; height: 200px; object-fit: cover;">
                </a>

                <div class="product-card__content p-sm-2 w-100">
                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                        <a href="{{ route('showProductDetails', $similarProduct->product_id) }}" class="link text-line-2">{{ $similarProduct->product_name }}</a>
                    </h6>   
                    <div class="flex-align gap-4">
                        <span class="text-main-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                    </div>

                    <div class="product-card__content mt-12">
                        <div class="product-card__price mb-8">
                            <span class="text-heading text-md fw-semibold ">Rs {{ number_format($similarProduct->normal_price, 2) }}<span class="text-gray-500 fw-normal">/Qty</span> </span>
                        </div>
                        <div class="flex-align gap-6">
                            <span class="text-xs fw-bold text-gray-600">4.8</span>
                            <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                            <span class="text-xs fw-bold text-gray-600">(17k)</span>
                        </div>
                        <a href="cart.html" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 mt-24 w-100 justify-content-center">
                            Add To Cart <i class="ph ph-shopping-cart"></i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    </div>
</section>

<!-- ========================== Similar Product End ============================= -->
    
    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->

    <!-- =============================== Newsletter Section Start ============================ -->
<div class="newsletter">
    <div class="container container-lg">
        <div class="newsletter-box position-relative rounded-16 flex-align gap-16 flex-wrap z-1">
            <img src="assets/images/bg/newsletter-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="">
                        <h1 class="text-white mb-12" data-aos="fade-down" data-aos-duration="800">Don't Miss Out on Grocery Deals</h1>
                        <p class="text-white h5 mb-0" data-aos="fade-up" data-aos-duration="800">SING UP FOR THE UPDATE NEWSLETTER</p>
                        <form action="#" class="position-relative mt-40" data-aos="zoom-in" data-aos-duration="800">
                            <input type="text" class="form-control common-input rounded-pill text-white py-22 px-16 pe-144" placeholder="Your email address...">
                            <button type="submit" class="btn btn-main-two rounded-pill position-absolute top-50 translate-middle-y inset-inline-end-0 me-10">Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 text-center d-xl-block d-none">
                    <img src="{{ asset('/frontend/assets/images/thumbs/newsletter-img.png') }}" alt="" data-aos="zoom-in" data-aos-duration="800">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============================== Newsletter Section End ============================ -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
document.querySelectorAll('.size_button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.size_button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        document.getElementById('selectedSize').value = button.getAttribute('data-size');
    });
});

document.querySelectorAll('.color-list__button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.color-list__button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        document.getElementById('selectedColor').value = button.getAttribute('data-color');
    });
});

</script>

<script>
var minus = $('.quantity__minus');
var plus = $('.quantity__plus');
var normalPrice = parseFloat('{{ $product->normal_price }}'); 

$(plus).on('click', function () {
    var input = $(this).siblings('.quantity__input');
    var value = parseInt(input.val()); 
    value++; // Increment value
    input.val(value); 

    updatePrice(value); 
});

$(minus).on('click', function () {
    var input = $(this).siblings('.quantity__input');
    var value = parseInt(input.val()); 
    if (value > 1) {
        value--; 
    }
    input.val(value); 

    updatePrice(value); 
});

function updatePrice(quantity) {
    var newPrice = (normalPrice * quantity).toFixed(2); 
    $('.price-display').text(newPrice); 
    $('#hiddenQuantity').val(quantity); 
    $('#hiddenPrice').val(newPrice); 
}

$(document).ready(function() {
    var initialQuantity = parseInt($('#quantityInput').val());
    updatePrice(initialQuantity); 
});
</script>

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

    // Handle Buy Now button click
    document.getElementById('buyNowBtn').addEventListener('click', function(e) {
    e.preventDefault(); 

    // Check if product has size/color and if they're selected
    if ((productHasSize && !selectedSize) || (productHasColor && !selectedColor)) {
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
    } else {
        if ({{ $product->quantity }} > 0) {
            // Prevent multiple submissions by disabling the button
            document.getElementById('buyNowBtn').disabled = true;

            // Submit the form
            document.getElementById('addToCartForm').submit();

            // Add a small delay to ensure form submission is processed
            setTimeout(function() {
                window.location.href = '{{ route('cart') }}';
            }, 500);
        } else {
            Swal.fire({
                title: 'Out of Stock',
                text: 'This product is currently out of stock.',
                icon: 'warning',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        }
    }
});

    // Disable Buy Now button if product is out of stock
    if ({{ $product->quantity }} === 0) {
        const buyNowBtn = document.getElementById('buyNowBtn');
        buyNowBtn.classList.add('disabled');
        buyNowBtn.addEventListener('click', function(e) {
            e.preventDefault(); 
        });
    }
}); 
</script>


@endsection