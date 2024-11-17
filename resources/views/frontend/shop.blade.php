

@extends ('frontend.master')

@section('content')


<style>
    .product-description {
    display: -webkit-box;
    -webkit-line-clamp: 3; 
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;  
}

</style>
   <!-- ========================= Breadcrumb Start =============================== -->
   <div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Shop</h6>
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
                <li class="text-sm text-main-600"> Product Shop </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->
<!-- =============================== Shop Section Start ======================================== -->
<section class="shop py-80">
    <div class="container container-lg">
        <div class="row">

            <!-- Sidebar Start -->
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <button type="button" class="shop-sidebar__close d-lg-none d-flex w-32 h-32 flex-center border border-gray-100 rounded-circle hover-bg-main-600 position-absolute inset-inline-end-0 me-10 mt-8 hover-text-white hover-border-main-600">
                        <i class="ph ph-x"></i>
                    </button>
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Product Category</h6>
                        <ul class="max-h-540 overflow-y-auto scroll-sm">
                            <li class="mb-24">
                                <a href="{{ route('shop.index') }}" 
                                class="text-gray-900 hover-text-main-600 {{ !isset($categoryId) ? 'font-bold' : '' }}">
                                    All Categories
                                </a>
                            </li>
                           <!-- Category Filter -->
                            @foreach($categories as $category)
                                <li class="mb-24">
                                    <a href="{{ route('shop.index', [
                                        'category_id' => $category->id, 
                                        'min_price' => $minPrice, 
                                        'max_price' => $maxPrice,
                                        'color' => $color
                                    ]) }}" 
                                    class="text-gray-900 hover-text-main-600 {{ isset($categoryId) && $categoryId == $category->id ? 'font-bold' : '' }}">
                                        {{ $category->name }} ({{ $category->products_count }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Price</h6>
                        <div class="custom--range">
                            <div id="slider-range"></div>
                            <div class="flex-between flex-wrap-reverse gap-8 mt-24 ">
                            <form method="GET" action="{{ route('shop.index') }}">
                                <input type="hidden" name="min_price" id="min_price" value="{{ $minPrice ?? 0 }}">
                                <input type="hidden" name="max_price" id="max_price" value="{{ $maxPrice ?? 20000 }}">
                                <button type="submit" class="btn btn-main h-40 flex-align">Filter </button>
                            </form>

                                <div class="custom--range__content flex-align gap-8">
                                    <span class="text-gray-500 text-md flex-shrink-0">Price:</span>
                                    <input type="text" class="custom--range__prices text-neutral-600 text-start text-md fw-medium" id="amount" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Color</h6>
                        <ul class="color-filter-list max-h-540 overflow-y-auto scroll-sm">
                            @php
                                $displayedColors = []; 
                            @endphp
                            <!-- Color Filter -->
                            @foreach($products as $product)
                                @foreach($product->variations as $variation)
                                    @if($variation->type == 'color' && !in_array($variation->hex_value, $displayedColors)) 
                                        <li class="mb-16 color-item">
                                            <div class="form-check common-check common-radio checked-black">
                                                <input class="form-check-input" type="radio" name="color" id="color{{ $variation->id }}" value="{{ $variation->hex_value }}" style="display: none;" onclick="filterByColor('{{ $variation->hex_value }}')">
                                                <label class="form-check-label border-gray-100 color-swatch" for="color{{ $variation->id }}" 
                                                    style="background-color: {{ $variation->hex_value }}; display: inline-block; width: 24px; height: 24px; border-radius: 50%; cursor: pointer; transition: box-shadow 0.3s; border: 1px solid gray;"
                                                    onmouseover="this.style.boxShadow='0 0 5px rgba(0,0,0,0.5)';" 
                                                    onmouseout="if (!this.classList.contains('selected')) this.style.boxShadow='none';"></label>
                                            </div>
                                        </li>
                                        @php
                                            $displayedColors[] = $variation->hex_value;
                                        @endphp
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>

                    
                    <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                        <h6 class="text-xl border-bottom border-gray-100 pb-24 mb-24">Filter by Rating</h6>
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating5"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating5">
                            </div>
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
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating4"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating4">
                            </div>
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
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating3"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating3">
                            </div>
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
                        <div class="flex-align gap-8 position-relative mb-20">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating2"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating2">
                            </div>
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
                        <div class="flex-align gap-8 position-relative mb-0">
                            <label class="position-absolute w-100 h-100 cursor-pointer" for="rating1"> </label>
                            <div class="common-check common-radio mb-0">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="rating1">
                            </div>
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
            <!-- Sidebar End -->

           <!-- Content Start -->
            <div class="col-lg-9">
                <!-- Top Start -->
                <div class="flex-between gap-16 flex-wrap mb-40 ">
                    <span class="text-gray-900">
                        Showing {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} results
                    </span>
                    <div class="position-relative flex-align gap-16 flex-wrap">
                        <div class="list-grid-btns flex-align gap-16">
                            <button type="button" class="w-44 h-44 flex-center border border-gray-100 rounded-6 text-2xl list-btn">
                                <i class="ph-bold ph-list-dashes"></i>
                            </button>
                            <button type="button" class="w-44 h-44 flex-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn">
                                <i class="ph ph-squares-four"></i>
                            </button>
                        </div>  
                        <button type="button" class="w-44 h-44 d-lg-none d-flex flex-center border border-gray-100 rounded-6 text-2xl sidebar-btn">
                            <i class="ph-bold ph-funnel"></i>
                        </button>
                    </div>
                </div>
                <!-- Top End -->

                <div class="list-grid-wrapper">
                    @foreach($products as $product)
                        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <a href="{{ url('/product-details/' . $product->product_id) }}" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" 
                                    alt="{{ $product->product_name }}" 
                                    class="product-image">
                                <span class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Sale</span>
                              
                            </a>

                            <div class="product-card__content mt-16">
                                <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                    <a href="{{ url('/product-details/' . $product->product_id) }}" class="link text-line-2" tabindex="0">{{ $product->product_name }}</a>
                                </h6>
                                <div class="flex-align mb-20 mt-16 gap-6">
                                    <div class="rating-info d-flex gap-2">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <!-- Heart Icon -->
                                    <button type="button" class="heart-icon ms-auto" 
                                            id="wishlist-icon-{{ $product->product_id }}" 
                                            onclick="toggleWishlist(this, '{{ $product->product_id }}')">
                                        <i class="fa-regular fa-heart" style="font-size: 15px;"></i>
                                    </button>
                                </div>

                                <div class="mt-8">
                                    @php
                                        // Calculate the percentage sold
                                        $percentageSold = $product->total_quantity > 0 
                                            ? ($product->sold_quantity / $product->total_quantity) * 100 
                                            : 0;
                                    @endphp

                                    <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $percentageSold }}" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-two-600 rounded-pill" style="width: {{ $percentageSold }}%;"></div>
                                    </div>
                                    <span class="text-gray-900 text-xs fw-medium mt-8">
                                        Sold: {{ $product->sold_quantity }}/{{ $product->total_quantity }}
                                    </span>
                                </div>

                                <div class="product-card__price my-20">
                                    <span class="text-heading text-md fw-semibold ">Rs {{ number_format($product->normal_price, 2) }} <span class="text-gray-500 fw-normal">/Qty</span></span>
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
                                <div class="modal-content p-6" style="border-radius: 0;">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row gx-5">
                                            <aside class="col-lg-5">
                                                <div class="rounded-4 mb-3 d-flex justify-content-center">
                                                    <a class="rounded-4 main-image-link" href="{{ asset('storage/' . $product->images->first()->image_path) }}">
                                                        <img id="mainImage" class="rounded-4 fit" src="{{ asset('storage/' . $product->images->first()->image_path) }}" style="width:250px" />
                                                    </a>
                                                </div>
                                                <div class="d-flex justify-content-center mb-3">
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
                                                <div class="flex-align flex-wrap gap-12 mt-12">
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
                                                <hr />
                                                
                                                <div class="product-availability mt-3 mb-12">
                                                    <span>Availability :</span>
                                                    @if($product->quantity > 1)
                                                        <span class="ms-1" style="color:#4caf50;">In stock</span>
                                                    @else
                                                        <span class="ms-1" style="color:red;">Out of stock</span>
                                                    @endif
                                                </div>

                                                 <!-- Sizes Section -->
                                                @if ($product->variations->pluck('value')->filter()->unique()->isNotEmpty())
                                                    <div class="flex-between align-items-start flex-wrap gap-16 mb-8">
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

                                                <div class="product-price mb-3 mt-8 d-flex align-items-center">
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
                                                        <button type="submit" class="btn btn-main w-95 mt-5" 
                                                                @if ($product->quantity == 0) disabled @endif>
                                                            Add To Cart
                                                        </button>
                                                    </form>
                                                @else
                                                    <p class="text-danger mb-5">Please <a href="{{ route('login') }}">log in</a> to add items to the cart.</p>
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



                    @endforeach
                </div>

                <!-- Pagination Start -->
                <ul class="pagination flex-center flex-wrap gap-16">
                    <li class="page-item">
                        <a class="page-link flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100" href="{{ $products->previousPageUrl() }}">
                            <i class="ph-bold ph-arrow-left"></i>
                        </a>
                    </li>
                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                        <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                            <a class="page-link flex-center text-md rounded-8 fw-medium text-neutral-600 border border-gray-100" href="{{ $products->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="page-item">
                        <a class="page-link flex-center text-xxl rounded-8 fw-medium text-neutral-600 border border-gray-100" href="{{ $products->nextPageUrl() }}">
                            <i class="ph-bold ph-arrow-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- Pagination End -->
            </div>
            <!-- Content End -->
        </div>
    </div>
 </section>

<!-- =============================== Shop Section End ======================================== -->



    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


   
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 20000,
                values: [ {{ $minPrice ?? 0 }}, {{ $maxPrice ?? 20000 }} ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "Rs " + ui.values[ 0 ] + " - Rs " + ui.values[ 1 ] );
                    $( "#min_price" ).val(ui.values[0]);
                    $( "#max_price" ).val(ui.values[1]);
                }
            });
            $( "#amount" ).val( "Rs " + $( "#slider-range" ).slider( "values", 0 ) + " - Rs " + $( "#slider-range" ).slider( "values", 1 ) );
        });
    </script>

    <script>
            // image thumbnails
            $(document).ready(function() {
            // When a thumbnail is clicked
            $('.thumbnail-image').click(function() {
                var newImageSrc = $(this).data('image');  // Get the image URL from the data attribute
                $('#mainImage').attr('src', newImageSrc);  // Update the main image's src
            });
        });


    // Change the box shadow of the selected color
        const colorInputs = document.querySelectorAll('input[name="color"]');
        colorInputs.forEach(input => {
            input.addEventListener('change', function() {
                // Remove the selected box shadow from all labels
                colorInputs.forEach(input => {
                    const label = document.querySelector(`label[for="${input.id}"]`);
                    label.style.boxShadow = 'none';
                    label.classList.remove('selected'); // Remove selected class
                });
                // Add box shadow for the selected label
                const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
                selectedLabel.style.boxShadow = '0 0 5px rgba(255, 69, 0, 0.7)'; 
                selectedLabel.classList.add('selected'); 
            });
        });
    </script>
    <script>
    function filterByColor(color) {
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);
        params.set('color', color); // Set the color parameter

        // Make sure to keep existing price and category filters
        params.set('min_price', document.getElementById('min_price').value);
        params.set('max_price', document.getElementById('max_price').value);
        params.set('category_id', "{{ $categoryId }}");

        window.location.href = url.pathname + '?' + params.toString();
    }


    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.getAttribute('data-product-id');
        console.log('Product ID:', productId);
    });
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

   
}); 

</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const productIds = [...document.querySelectorAll('.heart-icon')].map(button => button.id.replace('wishlist-icon-', ''));

    // Fetch wishlist status for all products on the page
    fetch('/wishlist/check-multiple', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ product_ids: productIds })
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
        body: JSON.stringify({ product_id: productId })
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



 