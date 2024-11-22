@extends ('frontend.master')

@section('content')
<div class="banner-two">
    <div class="container container-lg">
        <div class="banner-two-wrapper d-flex align-items-start">          
            <div class="banner-item-two-wrapper rounded-24 overflow-hidden position-relative arrow-center flex-grow-1 mb-0">
                <img src="{{ asset('frontend/assets/images/bg/banner-two-bg.png') }}" alt="" class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">
                <div class="banner-item-two__slider">
                    <div class="banner-item-two">
                        <div class="banner-item-two__content">
                            <span class="text-white mb-8 h6 wow bounceInDown">Starting at only Rs 500</span>
                            <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You Love For Less</h2>
                            <a href="{{ route('shop.index') }}" class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48 wow bounceInUp">
                                Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i> </span>
                            </a>
                        </div>
                        <div class="banner-item-two__thumb position-absolute bottom-0 wow bounceInUp" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend/assets/images/imgs/music-cover1.png" alt="">
                        </div>
                    </div>
                    <div class="banner-item-two">
                        <div class="banner-item-two__content">
                            <span class="text-white mb-8 h6 wow bounceInDown">Starting at only Rs 500</span>
                            <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You Love For Less</h2>
                            <a href="{{ route('shop.index') }}" class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48 wow bounceInUp">
                                Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i> </span>
                            </a>
                        </div>
                        <div class="banner-item-two__thumb position-absolute bottom-0 wow bounceInUp" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend/assets/images/imgs/music-cover1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Banner Section End =============================== -->

<!-- ============================ promotional banner Start ========================== -->
<section class="promotional-banner mt-32">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                <div class="position-relative rounded-16 overflow-hidden z-1 p-32">
                    <img src="frontend/assets/images/bg/promo-bg-img1.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="flex-between flex-wrap gap-16">
                        <div class="">
                            <span class="text-heading text-sm mb-8">Latest Deal</span>
                            <h6 class="mb-0">iPhone 15 Pro Max</h6>
                            <a href="shop.html" class="d-inline-flex align-items-center gap-8 mt-16 text-heading text-md fw-medium border border-top-0 border-end-0 border-start-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">
                                Shop Now
                                <span class="icon text-md d-flex"><i class="ph ph-plus"></i></span>
                            </a>
                        </div>
                        <div class="pe-xxl-4">
                            <img src="frontend/assets/images/imgs/phone.png" alt="" style="width: 130px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                <div class="position-relative rounded-16 overflow-hidden z-1 p-32">
                    <img src="frontend/assets/images/bg/promo-bg-img2.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="flex-between flex-wrap gap-16">
                        <div class="">
                            <span class="text-heading text-sm mb-8">Get 60% Off</span>
                            <h6 class="mb-0">Instax Mini 11 Camera</h6>
                            <a href="shop.html" class="d-inline-flex align-items-center gap-8 mt-16 text-heading text-md fw-medium border border-top-0 border-end-0 border-start-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">
                                Shop Now
                                <span class="icon text-md d-flex"><i class="ph ph-plus"></i></span>
                            </a>
                        </div>
                        <div class="pe-xxl-4">
                            <img src="frontend/assets/images/imgs/category-3.png" alt="" style="width: 100px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="position-relative rounded-16 overflow-hidden z-1 p-32">
                    <img src="frontend/assets/images/bg/promo-bg-img3.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 object-fit-cover z-n1">
                    <div class="flex-between flex-wrap gap-16">
                        <div class="">
                            <span class="text-heading text-sm mb-8">Start From $250</span>
                            <h6 class="mb-0">Airpod Headphone</h6>
                            <a href="shop.html" class="d-inline-flex align-items-center gap-8 mt-16 text-heading text-md fw-medium border border-top-0 border-end-0 border-start-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">
                                Shop Now
                                <span class="icon text-md d-flex"><i class="ph ph-plus"></i></span>
                            </a>
                        </div>
                        <div class="pe-xxl-4">
                            <img src="frontend/assets/images/imgs/headphones.png" alt="" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ promotional banner End ========================== -->


<!-- ========================= random products Start ================================ -->

<section class="recently-viewed pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Latest Products</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="{{ route('shop.index') }}" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Products</a>
                    </div>
                </div>
            </div>

            <div class="row g-12">
                @if ($products->isNotEmpty())
                @foreach($products->take(6) as $product) <!-- Limit to 6 products -->
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{ route('showProductDetails', $product->product_id) }}" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller</span>
                            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->product_name }}" class="w-auto max-w-unset" style="width: 200px; height: 200px; object-fit: cover;">
                        </a>
                        <div class="product-card__content mt-16">
                            @if($product->normal_price > $product->total_price)
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">
                                {{ round(100 - ($product->total_price / $product->normal_price) * 100) }}% OFF
                            </span>
                            @endif
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="{{ route('showProductDetails', $product->product_id) }}" class="link text-line-2" tabindex="0">{{ $product->product_name }}</a>
                            </h6>
                            <div class="flex-align gap-6">
                                <!-- Dynamic Ratings -->
                                @if ($product->total_reviews!=0)
                                <div class="flex-align gap-8">
                                    @php
                                    $fullStars = floor($product->average_rating); // Number of full stars
                                    $hasHalfStar = ($product->average_rating - $fullStars) >= 0.5; // Half-star condition
                                    @endphp
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        @endfor
                                        @if ($hasHalfStar)
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star-half"></i></span>
                                        @endif
                                </div>

                                <span class="text-xs fw-medium text-gray-500">{{ number_format($product->average_rating, 1) }}</span>
                                <span class="text-xs fw-medium text-gray-500">({{ $product->total_reviews }})</span>
                                @endif
                            </div>

                            <div class="flex-align mb-20 mt-16 gap-6">
                                <div class="rating-info d-flex gap-2">
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by DK Mart</span>
                                </div>
                                <!-- Heart Icon -->
                                <button type="button" class="heart-icon ms-auto"
                                    id="wishlist-icon-{{ $product->product_id }}"
                                    onclick="toggleWishlist(this, '{{ $product->product_id }}')">
                                    <i class="fa-regular fa-heart" style="font-size: 15px;"></i>
                                </button>
                            </div>
                            <div class="product-card__price mt-16 mb-30">
                                @if($product->normal_price > $product->total_price)
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through">${{ $product->normal_price }}</span>
                                @endif
                                <span class="text-heading text-md fw-semibold ">LKR {{ $product->total_price }} <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>No products available at the moment.</p>
                @endif
            </div>

            <div class="mb-24 overflow-hidden deal-week-box rounded-16 flex-between position-relative z-1">
                <img src="frontend/assets/images/bg/week-deal-bg.png" alt="" class="position-absolute inset-block-start-0 w-100 h-100 z-n1 object-fit-cover">
                <div class="flex-shrink-0 d-lg-block d-none ps-22" data-aos="zoom-in">
                    <img src="frontend/assets/images/imgs/deals2.png" alt="" style="width: 350px">
                </div>
                <div class="deal-week-box__content px-sm-4 d-block w-100">
                    <h6 class="mb-20 wow bounceIn">Apple AirPods Max, Over Ear Headphones</h6>
                    <div class="mt-20 countdown" id="countdown4">
                        <ul class="flex-wrap countdown-list style-four flex-left">
                            <li class="text-sm text-white countdown-list__item flex-align flex-column fw-medium rounded-circle bg-neutral-600">
                                <span class="days"></span>Days
                            </li>
                            <li class="text-sm text-white countdown-list__item flex-align flex-column fw-medium rounded-circle bg-neutral-600">
                                <span class="hours"></span>Hour
                            </li>
                            <li class="text-sm text-white countdown-list__item flex-align flex-column fw-medium rounded-circle bg-neutral-600">
                                <span class="minutes"></span>Min
                            </li>
                            <li class="text-sm text-white countdown-list__item flex-align flex-column fw-medium rounded-circle bg-neutral-600">
                                <span class="seconds"></span>Sec
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>

            <div class="deals-week-slider arrow-style-two">
                @foreach ($products->slice(0, 10) as $product)
                    <div data-aos="fade-up" data-aos-duration="200">
                        <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <a href="{{ route('showProductDetails', $product->product_id) }}" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                @if($product->quantity == 0)
                                    <span class="px-8 py-4 text-sm text-white product-card__badge bg-main-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                @endif
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->product_name }}" class="w-auto max-w-unset" style="width: 200px; height: 200px; object-fit: cover;">
                            </a>
                            <div class="mt-16 product-card__content">
                                <div class="gap-6 mt-16 mb-20 flex-align">
                                    <div class="gap-2 rating-info d-flex">
                                        <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                    </div>
                                    <!-- Heart Icon -->
                                    <button type="button" class="heart-icon ms-auto" 
                                            id="wishlist-icon-{{ $product->product_id }}" 
                                            onclick="toggleWishlist(this, '{{ $product->product_id }}')">
                                        <i class="fa-regular fa-heart" style="font-size: 15px;"></i>
                                    </button>
                                </div>
                                <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                    <a href="{{ route('showProductDetails', $product->product_id) }}" class="link text-line-2" tabindex="0">{{ $product->product_name }}</a>
                                </h6>
                                <div class="gap-4 flex-align">
                                    <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-xs text-gray-500">By {{ $product->seller_name ?? 'Store Name' }}</span>
                                </div>
                                <div class="mt-8">
                                    <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Sold Progress" aria-valuenow="{{ $product->sold_percentage ?? 35 }}" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: {{ $product->sold_percentage ?? 35 }}%"></div>
                                    </div>
                                    <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: {{ $product->sold_units ?? 18 }}/{{ $product->total_units ?? 35 }}</span>
                                </div>

                                <div class="my-20 product-card__price">
                                    <span class="text-heading text-md fw-semibold ">Rs {{ $product->normal_price }} <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                </div>

                                <a href="" style="width:230px" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- ========================= recently viewed End ================================ -->


<!-- ========================= Popular Products Start ================================ -->
<section class="popular-products pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Popular Products</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Products</a>
                    </div>
                </div>
            </div>

            <div class="popular-products-box rounded-16 overflow-hidden flex-between position-relative z-1 mb-24">
                <img src="frontend/assets/images/bg/expensive-offer-bg.png" alt="" class="position-absolute inset-block-start-0 inset-block-start-0 w-100 h-100 z-n1">
                <div class="d-lg-block d-none ps-32" data-aos="zoom-in" data-aos-duration="800">
                    <img src="frontend/assets/images/imgs/img.png" alt="" style="width:250px;">
                </div>
                <div class="popular-products-box__content px-sm-4 d-block w-100 text-center py-20">
                    <div class="flex-align gap-16 justify-content-center" data-aos="zoom-in" data-aos-duration="800">
                        <h6 class="mb-0">Exclusive Offer</h6>
                        <h4 class="mb-0">45% OFF</h4>
                    </div>
                    <div class="countdown mt-4" id="countdown10">
                        <ul class="countdown-list style-four flex-center flex-wrap">
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600 w-56 h-56">
                                <span class="days"></span>Days
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600 w-56 h-56">
                                <span class="hours"></span>Hour
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600 w-56 h-56">
                                <span class="minutes"></span>Min
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600 w-56 h-56">
                                <span class="seconds"></span>Sec
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-lg-block d-none" data-aos="zoom-in" data-aos-duration="800">
                    <img src="frontend/assets/images/imgs/img2.png" alt="" style="width:300px;">
                </div>
            </div>

            <div class="row gy-4">
                @foreach ($categories->slice(0, 8) as $category)
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{ route('shop.index') }}" class="product-card__thumb flex-center h-unset rounded-8 position-relative w-unset flex-shrink-0 p-0" tabindex="0">
                            <img src="
                                        @if (Str::contains(strtolower($category->name), 'women'))
                                            {{ asset('frontend/assets/images/imgs/category-1.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'men'))
                                            {{ asset('frontend/assets/images/imgs/category-2.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'health'))
                                            {{ asset('frontend/assets/images/imgs/category-4.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'electronic'))
                                            {{ asset('frontend/assets/images/imgs/category-3.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'sports'))
                                            {{ asset('frontend/assets/images/imgs/category-5.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'watch'))
                                            {{ asset('frontend/assets/images/imgs/category-6.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'appliances'))
                                            {{ asset('frontend/assets/images/imgs/category-7.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'home'))
                                            {{ asset('frontend/assets/images/imgs/category-8.jpg') }}
                                        @elseif (Str::contains(strtolower($category->name), 'groceries'))
                                            {{ asset('frontend/assets/images/imgs/category-9.jpg') }}
                                        @else
                                            {{ asset('frontend/assets/images/imgs/default-1.png') }}
                                        @endif
                                    " alt="{{ $category->name }}" class="w-100 max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="{{ route('shop.index') }}" class="link text-line-2" tabindex="0">{{ $category->name }}</a>
                            </h6>
                            @foreach ($category->subcategories->take(4) as $subcategory)
                            <span class="text-gray-600 text-sm mb-4">{{ $subcategory->name }}</span><br>
                            @endforeach

                            <a href="{{ route('shop.index') }}" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- ========================= Popular Products End ================================ -->

<!-- ========================= Deals Week Start ================================ -->
<section class="deals-weeek pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Deal of The Week</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="deal-week-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="deal-week-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deal-week-box rounded-16 overflow-hidden flex-between position-relative z-1 mb-24">
                <img src="frontend/assets/images/bg/week-deal-bg.png" alt="" class="position-absolute inset-block-start-0 inset-block-start-0 w-100 h-100 z-n1 object-fit-cover">
                <div class="d-lg-block d-none ps-22 flex-shrink-0" data-aos="zoom-in">
                    <img src="frontend/assets/images/imgs/deals2.png" alt="" style="width: 350px">
                </div>
                <div class="deal-week-box__content px-sm-4 d-block w-100">
                    <h6 class="mb-20 wow bounceIn">Apple AirPods Max, Over Ear Headphones</h6>
                    <div class="countdown mt-20" id="countdown4">
                        <ul class="countdown-list style-four flex-left flex-wrap">
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600">
                                <span class="days"></span>Days
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600">
                                <span class="hours"></span>Hour
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600">
                                <span class="minutes"></span>Min
                            </li>
                            <li class="countdown-list__item flex-align flex-column text-sm fw-medium text-white rounded-circle bg-neutral-600">
                                <span class="seconds"></span>Sec
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="deals-week-slider arrow-style-two">
                @foreach ($products->slice(0, 10) as $product)
                <div data-aos="fade-up" data-aos-duration="200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="{{ route('showProductDetails', $product->product_id) }}" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            @if($product->quantity == 0)
                            <span class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                            @endif
                            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->product_name }}" class="w-auto max-w-unset" style="width: 200px; height: 200px; object-fit: cover;">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align mb-20 mt-16 gap-6">
                                @if ($product->total_reviews!=0)
                                <div class="rating-info d-flex gap-2">
                                    @php
                                    $fullStars = floor($product->average_rating); // Number of full stars
                                    $hasHalfStar = ($product->average_rating - $fullStars) >= 0.5; // Half-star condition
                                    @endphp
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        @endfor
                                        @if ($hasHalfStar)
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star-half"></i></span>
                                        @endif
                                        <span class="text-xs fw-medium text-gray-500">{{ number_format($product->average_rating, 1) }}</span>
                                        <span class="text-xs fw-medium text-gray-500">({{ $product->total_reviews }})</span>
                                </div>
                                @endif
                                <!-- Heart Icon -->
                                <button type="button" class="heart-icon ms-auto"
                                    id="wishlist-icon-{{ $product->product_id }}"
                                    onclick="toggleWishlist(this, '{{ $product->product_id }}')">
                                    <i class="fa-regular fa-heart" style="font-size: 15px;"></i>
                                </button>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="{{ route('showProductDetails', $product->product_id) }}" class="link text-line-2" tabindex="0">{{ $product->product_name }}</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By {{ $product->seller_name ?? 'Store Name' }}</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Sold Progress" aria-valuenow="{{ $product->sold_percentage ?? 35 }}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: {{ $product->sold_percentage ?? 35 }}%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: {{ $product->sold_units ?? 18 }}/{{ $product->total_units ?? 35 }}</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-heading text-md fw-semibold ">Rs {{ $product->normal_price }} <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>

                            <a href="" style="width:230px" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- ========================= Deals Week End ================================ -->


<!-- ========================= Top Selling Products Start ================================ 
    <section class="top-selling-products pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="p-24 border border-gray-100 rounded-16">
                <div class="mb-24 section-heading">
                    <div class="flex-wrap gap-8 flex-between">
                        <h5 class="mb-0 wow bounceInLeft">Top Selling Products</h5>
                        <div class="gap-16 flex-align wow bounceInRight">
                            <a href="shop.html" class="text-sm text-gray-700 fw-medium hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                            <div class="gap-8 flex-align">
                                <button type="button" id="top-selling-prev" class="text-xl border border-gray-100 slick-prev slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-left"></i>
                                </button>
                                <button type="button" id="top-selling-next" class="text-xl border border-gray-100 slick-next slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <div class="overflow-hidden text-center position-relative rounded-16 p-28 z-1">
                            <img src="frontend/assets/images/bg/deal-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
                            <div class="py-xl-4">
                                <h6 class="mb-4 fw-semibold">Polaroid Now+ Gen 2 - White</h6>
                                <h5 class="mb-40 fw-semibold">Fresh Vegetables</h5>
                                <a href="cart.html" class="gap-8 px-24 py-16 btn text-heading border-neutral-600 hover-bg-neutral-600 hover-text-white flex-center d-inline-flex rounded-pill fw-medium" tabindex="0">
                                    Shop Now <i class="text-xl ph ph-shopping-cart d-flex"></i>
                                </a>
                            </div>
                            <div class="d-md-block d-none mt-36">
                                <img src="frontend/assets/images/thumbs/deal-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="top-selling-product-slider arrow-style-two">
                            <div data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-main-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img7.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <div class="gap-6 flex-align">
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                        </div>
                                        <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="gap-4 flex-align">
                                            <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                            <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                        </div>
                                        <div class="mt-8">
                                            <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                            </div>
                                            <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: 18/35</span>
                                        </div>

                                        <div class="my-20 product-card__price">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>

                                        <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img8.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <div class="gap-6 flex-align">
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                        </div>
                                        <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="gap-4 flex-align">
                                            <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                            <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                        </div>
                                        <div class="mt-8">
                                            <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                            </div>
                                            <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: 18/35</span>
                                        </div>

                                        <div class="my-20 product-card__price">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>

                                        <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img9.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <div class="gap-6 flex-align">
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                        </div>
                                        <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="gap-4 flex-align">
                                            <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                            <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                        </div>
                                        <div class="mt-8">
                                            <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                            </div>
                                            <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: 18/35</span>
                                        </div>

                                        <div class="my-20 product-card__price">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>

                                        <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img10.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <div class="gap-6 flex-align">
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                        </div>
                                        <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="gap-4 flex-align">
                                            <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                            <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                        </div>
                                        <div class="mt-8">
                                            <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                            </div>
                                            <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: 18/35</span>
                                        </div>

                                        <div class="my-20 product-card__price">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>

                                        <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-main-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img8.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <div class="gap-6 flex-align">
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                        </div>
                                        <h6 class="mt-12 mb-8 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="gap-4 flex-align">
                                            <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                            <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                        </div>
                                        <div class="mt-8">
                                            <div class="h-4 progress w-100 bg-color-three rounded-pill" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                            </div>
                                            <span class="mt-8 text-xs text-gray-900 fw-medium">Sold: 18/35</span>
                                        </div>

                                        <div class="my-20 product-card__price">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>

                                        <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                            Add To Cart <i class="ph ph-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ========================= Top Selling Products End ================================ -->


<!-- ========================= Trending Products Start ================================ 
    <section class="trending-productss pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="p-24 border border-gray-100 rounded-16">
                <div class="mb-24 section-heading">
                    <div class="flex-wrap gap-8 flex-between">
                        <h5 class="mb-0 wow bounceInLeft">Trending Products</h5>
                        <ul class="nav common-tab style-two nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile" aria-selected="false">Mobile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-headphone-tab" data-bs-toggle="pill" data-bs-target="#pills-headphone" type="button" role="tab" aria-controls="pills-headphone" aria-selected="false">Headphone</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-usb-tab" data-bs-toggle="pill" data-bs-target="#pills-usb" type="button" role="tab" aria-controls="pills-usb" aria-selected="false">USB</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-camera-tab" data-bs-toggle="pill" data-bs-target="#pills-camera" type="button" role="tab" aria-controls="pills-camera" aria-selected="false">Camera</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-laptop-tab" data-bs-toggle="pill" data-bs-target="#pills-laptop" type="button" role="tab" aria-controls="pills-laptop" aria-selected="false">Laptop</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-accessories-tab" data-bs-toggle="pill" data-bs-target="#pills-accessories" type="button" role="tab" aria-controls="pills-accessories" aria-selected="false">Accessories</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mb-24 overflow-hidden trending-products-box rounded-16 flex-between position-relative">
                    <div class="d-md-block d-none ps-xxl-5 ps-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <img src="frontend/assets/images/thumbs/trending-products-img1.png" alt="">
                    </div>
                    <div class="px-4 py-32 text-center trending-products-box__content d-block w-100 wow bounceIn">
                        <h6 class="mb-0 trending-products-box__title">Laptop Pro <span class="mb-0 h4 fw-semibold">20% </span> off All Time On Order Now $980</h6>
                    </div>
                    <div class="d-md-block d-none pe-xxl-5 me-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <img src="frontend/assets/images/thumbs/trending-products-img2.png" alt="">
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-mobile-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-headphone" role="tabpanel" aria-labelledby="pills-headphone-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-usb" role="tabpanel" aria-labelledby="pills-usb-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-camera" role="tabpanel" aria-labelledby="pills-camera-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-laptop" role="tabpanel" aria-labelledby="pills-laptop-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-success-600 bg-success-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ========================= Trending Products End ================================ -->


<!-- =============================== Discount Start ============================ 
    <section class="discount py-80">
        <div class="container container-lg">
            <div class="row gy-4">
                <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="600">
                    <div class="overflow-hidden discount-item rounded-16 position-relative z-1 h-100 d-flex flex-column align-items-start justify-content-center">
                        <img src="frontend/assets/images/bg/discount-bg1.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1">
                        <div class="gap-20 w-100 flex-between">
                            <div class="discount-item__content">
                                <span class="mb-20 fw-semibold text-tertiary-600">UP TO 30% OFF</span>
                                <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6>
                                <a href="shop.html" class="gap-8 btn btn-outline-black rounded-pill" tabindex="0">
                                    Shop Now
                                </a>
                            </div>
                            <img src="frontend/assets/images/thumbs/discount-img1.png" alt="" class="d-sm-block d-none">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="overflow-hidden discount-item rounded-16 position-relative z-1 h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="frontend/assets/images/bg/discount-bg2.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1">
                        <div class="gap-20 w-100 flex-between">
                            <div class="discount-item__content">
                                <span class="mb-20 fw-semibold text-tertiary-600">UP TO 30% OFF</span>
                                <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6>
                                <a href="shop.html" class="gap-8 btn btn-outline-black rounded-pill" tabindex="0">
                                    Shop Now
                                </a>
                            </div>
                            <img src="frontend/assets/images/thumbs/discount-img2.png" alt="" class="d-sm-block d-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     =============================== Discount End ============================ -->

<!--  <section class="featured-products overflow-hidden">
        <div class="container container-lg">
            <div class="flex-wrap-reverse row g-4">
                <div class="col-xxl-8">
                    <div class="p-24 border border-gray-100 rounded-16">
                        <div class="mb-24 section-heading">
                            <div class="flex-wrap gap-8 flex-between">
                                <h5 class="mb-0 wow bounceInLeft">Featured Products </h5>
                                <div class="gap-16 flex-align wow bounceInRight">
                                    <a href="shop.html" class="text-sm text-gray-700 fw-medium hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                                    <div class="gap-8 flex-align">
                                        <button type="button" id="featured-products-prev" class="text-xl border border-gray-100 slick-prev slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                            <i class="ph ph-caret-left"></i>
                                        </button>
                                        <button type="button" id="featured-products-next" class="text-xl border border-gray-100 slick-next slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                            <i class="ph ph-caret-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-4 featured-product-slider">
                            <div class="col-xxl-6">
                                <div class="featured-products__sliders">
                                    <div class="" data-aos="fade-up" data-aos-duration="800">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="featured-products__sliders">
                                    <div class="" data-aos="fade-up" data-aos-duration="800">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-primary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Sale</span>
                                                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6">
                                <div class="featured-products__sliders">
                                    <div class="" data-aos="fade-up" data-aos-duration="800">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="gap-16 p-16 mt-24 border border-gray-100 product-card d-flex hover-border-main-600 rounded-16 position-relative transition-2">
                                            <a href="product-details-two.html" class="flex-shrink-0 p-24 product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset" tabindex="0">
                                                <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                            </a>
                                            <div class="my-20 product-card__content flex-grow-1">
                                                <h6 class="mb-12 text-lg title fw-semibold">
                                                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                                </h6>
                                                <div class="gap-6 mb-12 flex-align">
                                                    <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                                    <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                    <span class="text-xs text-gray-500 fw-medium">(17k)</span>
                                                </div>
                                                <div class="gap-4 flex-align">
                                                    <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                    <span class="text-xs text-gray-500">By Lucky Supermarket</span>
                                                </div>
                                                <div class="my-20 product-card__price">
                                                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                                </div>

                                                <a href="cart.html" class="gap-8 px-24 product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 rounded-8 flex-center fw-medium" tabindex="0">
                                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4">
                    <div class="pb-0 overflow-hidden text-center position-relative rounded-16 bg-light-purple p-28 z-1 h-100" data-aos="fade-up" data-aos-duration="1000">
                        <img src="frontend/assets/images/bg/featured-product-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                        <div class="text-center py-xl-4">
                            <span class="mb-20 text-white h6">iPhone Smart Phone - Red</span>
                            <div class="gap-12 text-white flex-center">
                                <span class="">FROM</span>
                                <h4 class="mb-8 text-white">$890</h4>
                                <span class="px-8 py-2 text-sm text-white badge-style-two position-relative me-8 bg-main-two-600 rounded-4">20% off</span>
                            </div>
                            <a href="shop.html" class="gap-8 mt-16 mb-24 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill" tabindex="0">
                                Shop Now
                                <span class="text-xl icon d-flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                        <img src="frontend/assets/images/thumbs/featured-product-img.png" alt="" class="d-xxl-inline-flex d-none wow bounceInUp">
                    </div>
                </div>
            </div>
        </div>
    </section>-->


<!-- ========================= Big Deal Section Start =============================== 
    <div class="big-deal rounded-16 overflow-hidden flex-between position-relative mb-24 py-80">
        <div class="container container-lg">
            <div class="py-40 overflow-hidden big-deal-box position-relative z-1 rounded-16">
                <img src="frontend/assets/images/bg/big-deal-pattern.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">

                <div class="row gy-4 align-items-center">
                    <div class="text-center col-md-3 d-md-block d-none" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="frontend/assets/images/thumbs/big-deal1.png" alt="">
                    </div>
                    <div class="text-center col-md-6 big-deal-box__content">
                        <h4 class="mb-20 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">WATCHES BIG DEAL</h4>
                        <p class="text-heading fw-medium" data-aos="zoom-in" data-aos-duration="1000">Wonlex KT07 4G positioning watches</p>
                    </div>
                    <div class="text-center col-md-3 d-md-block d-none" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="frontend/assets/images/thumbs/big-deal2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     ========================= Big Deal Section End =============================== -->


<!-- ========================= Top Selling Products Start ================================ 
    <section class="recommended overflow-hidden">
        <div class="container container-lg">
            <div class="row g-12">
                <div class="col-xxl-4">
                    <div class="overflow-hidden text-center position-relative rounded-16 bg-light-purple p-28 z-1 h-100" data-aos="zoom-in" data-aos-duration="800">
                        <img src="frontend/assets/images/bg/recommended-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                        <div class="text-center py-xl-4">
                            <span class="mb-20 text-white h6">Insta360 GO 3S Action Camera - White</span>
                            <div class="gap-12 text-white flex-center">
                                <span class="">FROM</span>
                                <h4 class="mb-8 text-white">$430</h4>
                                <span class="px-8 py-2 text-sm text-white badge-style-two position-relative me-8 bg-main-two-600 rounded-4">20% off</span>
                            </div>
                        </div>
                        <img src="frontend/assets/images/thumbs/recommended-img.png" alt="" class="mt-48 d-xxl-block d-none wow bounceIn">
                    </div>
                </div>
                <div class="col-xxl-8">
                    <div class="p-24 border border-gray-100 rounded-16">
                        <div class="mb-24 section-heading">
                            <div class="flex-wrap gap-8 flex-between">
                                <h5 class="mb-0 wow bounceInLeft">Recommended For You</h5>
                                <div class="gap-16 flex-align wow bounceInRight">
                                    <a href="shop.html" class="text-sm text-gray-700 fw-medium hover-text-main-600 hover-text-decoration-underline">View All</a>
                                    <div class="gap-8 flex-align">
                                        <button type="button" id="recommended-prev" class="text-xl border border-gray-100 slick-prev slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                            <i class="ph ph-caret-left"></i>
                                        </button>
                                        <button type="button" id="recommended-next" class="text-xl border border-gray-100 slick-next slick-arrow flex-center rounded-circle hover-border-neutral-600 hover-bg-neutral-600 hover-text-white transition-1">
                                            <i class="ph ph-caret-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recommended-slider">
                            <div data-aos="fade-up" data-aos-duration="400">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-tertiary-600 position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                        <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-main-600 bg-main-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="600">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-main-600 bg-main-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="800">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-danger-600 position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-main-600 bg-main-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-success-600 position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-main-600 bg-main-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1200">
                                <div class="p-16 border border-gray-100 product-card h-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                    <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                        <span class="px-8 py-4 text-sm text-white product-card__badge bg-warning-600 position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                    </a>
                                    <div class="mt-16 product-card__content">
                                        <span class="px-8 py-4 text-sm text-main-600 bg-main-50 fw-medium">19%OFF</span>
                                        <h6 class="my-16 text-lg title fw-semibold">
                                            <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                        </h6>
                                        <div class="gap-6 flex-align">
                                            <div class="gap-8 flex-align">
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                            </div>
                                            <span class="text-xs text-gray-500 fw-medium">4.8</span>
                                            <span class="text-xs text-gray-500 fw-medium">(12K)</span>
                                        </div>

                                        <span class="px-8 py-2 mt-16 text-xs rounded-pill text-main-two-600 bg-main-two-50">Fulfilled by Marketpro</span>

                                        <div class="mt-16 product-card__price mb-30">
                                            <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                            <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                        </div>
                                        <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
     ========================= Top Selling Products End ================================ -->





<!-- =========================== Top Vendor Section Start ========================== 
    <section class="top-vendor py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="p-24 border border-gray-100 rounded-16">
                <div class="mb-24 section-heading">
                    <div class="flex-wrap gap-8 flex-between">
                        <h5 class="mb-0 wow bounceInLeft">Popular Products</h5>
                        <div class="gap-16 flex-align wow bounceInRight">
                            <a href="shop.html" class="text-sm text-gray-700 fw-medium hover-text-main-600 hover-text-decoration-underline">View All Products</a>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 vendor-card-wrapper">
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                        <div class="px-16 pb-24 text-center vendor-card">
                            <div class="">
                                <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="m-12 vendor-card__logo">
                                <h6 class="mt-32 text-lg title">Organic Market</h6>

                                <div class="gap-6 flex-align justify-content-center">
                                    <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-md fw-medium text-heading">4.8</span>
                                    <span class="text-md fw-medium text-heading">(12K)</span>
                                </div>
                            </div>
                            <div class="position-relative slick-arrows-style-three">
                                <button type="button" id="vendor-prev" class="w-24 h-24 text-sm text-white slick-prev slick-arrow position-absolute top-50 translate-middle-y flex-center rounded-circle bg-neutral-600 hover-bg-main-two-600 z-1 transition-1 inset-inline-start-0">
                                    <i class="ph ph-caret-left"></i>
                                </button>
                                <button type="button" id="vendor-next" class="w-24 h-24 text-sm text-white slick-next slick-arrow position-absolute top-50 translate-middle-y flex-center rounded-circle bg-neutral-600 hover-bg-main-two-600 z-1 transition-1 inset-inline-end-0">
                                    <i class="ph ph-caret-right"></i>
                                </button>
                                <div class="vendor-card__list style-two mt-22">
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img5.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                        <div class="px-16 pb-24 text-center vendor-card">
                            <div class="">
                                <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="m-12 vendor-card__logo">
                                <h6 class="mt-32 text-lg title">Best Buy</h6>

                                <div class="gap-6 flex-align justify-content-center">
                                    <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-md fw-medium text-heading">4.8</span>
                                    <span class="text-md fw-medium text-heading">(12K)</span>
                                </div>
                            </div>
                            <div class="position-relative slick-arrows-style-three">
                                <div class="vendor-card__list style-two mt-22">
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img7.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img8.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img9.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img10.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img11.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                        <div class="px-16 pb-24 text-center vendor-card">
                            <div class="">
                                <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="m-12 vendor-card__logo">
                                <h6 class="mt-32 text-lg title">Organic Market</h6>

                                <div class="gap-6 flex-align justify-content-center">
                                    <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-md fw-medium text-heading">4.8</span>
                                    <span class="text-md fw-medium text-heading">(12K)</span>
                                </div>
                            </div>
                            <div class="position-relative slick-arrows-style-three">
                                <div class="vendor-card__list style-two mt-22">
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img5.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                        <div class="px-16 pb-24 text-center vendor-card">
                            <div class="">
                                <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="m-12 vendor-card__logo">
                                <h6 class="mt-32 text-lg title">Best Buy</h6>

                                <div class="gap-6 flex-align justify-content-center">
                                    <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-md fw-medium text-heading">4.8</span>
                                    <span class="text-md fw-medium text-heading">(12K)</span>
                                </div>
                            </div>
                            <div class="position-relative slick-arrows-style-three">
                                <div class="vendor-card__list style-two mt-22">
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img7.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img8.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img9.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img10.png" alt="">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="bg-white vendor-card__item rounded-circle flex-center">
                                            <img src="frontend/assets/images/thumbs/vendor-two-img11.png" alt="">
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
     =========================== Top Vendor Section End ========================== -->


<!-- ================================== Day Sale Section Start =================================== 
    <section class="day-sale">
        <div class="container container-lg">
            <div class="mb-24 overflow-hidden day-sale-box rounded-16 flex-between position-relative z-1">

                <img src="frontend/assets/images/bg/day-sale-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                <div class="d-xl-block d-none" data-aos="zoom-in" data-aos-duration="800">
                    <img src="frontend/assets/images/thumbs/day-sale-img1.png" alt="">
                </div>
                <div class="py-32 day-sale-box__content d-block w-100 text-start ps-lg-0 ps-24">
                    <h3 class="mb-24 text-white fw-medium">CYBER MONDAY SALE</h3>
                    <h6 class="mb-8 text-white fw-medium">UP TO 30% OFF</h6>
                    <h6 class="mb-0 text-white fw-medium">COMPUTER & MOBILE ACCESSORIES</h6>
                    <a href="shop.html" class="gap-8 btn btn-outline-white flex-align d-inline-flex rounded-pill mt-28" tabindex="0">
                        Shop Now <i class="text-xl ph ph-plus d-flex"></i>
                    </a>
                </div>
                <div class="d-md-block d-none pe-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800">
                    <img src="frontend/assets/images/thumbs/day-sale-img2.png" alt="">
                </div>
            </div>
        </div>
    </section>
     ================================== Day Sale Section End =================================== -->




<!-- ============================== Top Brand Section Start ==================================== 
    <div class="top-brand py-80">
        <div class="container container-lg">
            <div class="p-24 border border-gray-100 rounded-16">
                <div class="mb-24 section-heading">
                    <div class="flex-wrap gap-8 flex-between">
                        <h5 class="mb-0">Top Brands</h5>
                        <div class="gap-8 flex-align">
                            <button type="button" id="topBrand-prev" class="text-xl border border-gray-100 slick-prev slick-arrow flex-center rounded-circle hover-border-main-two-600 hover-bg-main-two-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="topBrand-next" class="text-xl border border-gray-100 slick-next slick-arrow flex-center rounded-circle hover-border-main-two-600 hover-bg-main-two-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="top-brand__slider">
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img1.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img2.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img3.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img4.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img5.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img6.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img7.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img8.png" alt="">
                        </div>
                    </div>
                    <div class="wow bounceIn">
                        <div class="px-8 border border-gray-100 top-brand__item flex-center rounded-8 hover-border-gray-200 transition-1">
                            <img src="frontend/assets/images/thumbs/top-brand-img5.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
     ============================== Top Brand Section End ==================================== -->



<!-- =============================== Newsletter-two Section Start ============================ -->
<div class="newsletter-two bg-neutral-600 py-32 overflow-hidden" data-aos="fade-up" data-aos-duration="600">
    <div class="container container-lg">
        <div class="flex-between gap-20 flex-wrap">
            <div class="flex-align gap-22">
                <span class="d-flex"><img src="frontend/assets/images/icon/envelop.png" alt=""></span>
                <div>
                    <h5 class="text-white mb-12 fw-medium">Join Our Newsletter, Get 10% Off</h5>
                    <p class="text-white fw-light">Get all latest information on events, sales and offer</p>
                </div>
            </div>
            <form action="#" class="newsletter-two__form w-50">
                <div class="flex-align gap-16">
                    <input type="text" class="common-input style-two rounded-8 flex-grow-1 py-14" placeholder="Enter your email address">
                    <button type="submit" class="btn btn-main-two flex-shrink-0 rounded-8 py-16"> Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- =============================== Newsletter-two Section End ============================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productIds = [...document.querySelectorAll('.heart-icon')].map(button => button.id.replace('wishlist-icon-', ''));

        // Fetch wishlist status for all products on the page
        fetch('/wishlist/check-multiple', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_ids: productIds
                })
            })
            .then(response => response.json())
            .then(data => {
                // Loop through each product and update the icon if it's in the wishlist
                data.wishlist.forEach(productId => {
                    const heartIcon = document.querySelector(`#wishlist-icon-${productId}`);
                    if (heartIcon) {
                        heartIcon.classList.add('active');
                        const icon = heartIcon.querySelector('i');
                        icon.classList.replace('fa-regular', 'fa-solid');
                        icon.style.color = 'red';
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    });

    function toggleWishlist(button, productId) {
        // Toggle active state
        button.classList.toggle('active');
        const icon = button.querySelector('i');

        if (button.classList.contains('active')) {
            icon.classList.replace('fa-regular', 'fa-solid');
            icon.style.color = 'red';
        } else {
            icon.classList.replace('fa-solid', 'fa-regular');
            icon.style.color = '#ccc';
        }

        // Send AJAX request to toggle wishlist status
        fetch('/wishlist/toggle', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: productId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error); // If not logged in or another error
                } else {
                    alert(data.message); // Display success message
                }
            })
            .catch(error => console.error('Error:', error));
    }
</script>
@endsection