<!DOCTYPE html>
<html lang="en" class="color-two font-exo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> MarketPro - E-commerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="frontend/assets/css/slick.css">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="frontend/assets/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="frontend/assets/css/aos.css">
    <!-- Main css -->
    <link rel="stylesheet" href="frontend/assets/css/main.css">
</head> 
<body>
<header>
@include('includes.navbar-2')
</header>
    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Cart</h6>
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
                <li class="text-sm text-main-600"> Product Cart </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

    <!-- ================================ Cart Section Start ================================ -->
 <section class="cart py-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xl-9 col-lg-8">
                <div class="cart-table border border-gray-100 rounded-8 px-40 py-48">
                    <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                        <table class="table style-three">
                            <thead>
                                <tr>
                                    <th class="h6 mb-0 text-lg fw-bold">Delete</th>
                                    <th class="h6 mb-0 text-lg fw-bold">Product Name</th>
                                    <th class="h6 mb-0 text-lg fw-bold">Price</th>
                                    <th class="h6 mb-0 text-lg fw-bold">Quantity</th>
                                    <th class="h6 mb-0 text-lg fw-bold">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                            <i class="ph ph-x-circle text-2xl d-flex"></i>
                                            Remove
                                        </button>
                                    </td>
                                    <td>
                                        <div class="table-product d-flex align-items-center gap-24">
                                            <a href="product-details-two.html" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                <img src="assets/images/thumbs/product-two-img1.png" alt="">
                                            </a>
                                            <div class="table-product__content text-start">
    
                                                <h6 class="title text-lg fw-semibold mb-8">
                                                    <a href="product-details.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                </h6>
    
                                                <div class="flex-align gap-16 mb-16">
                                                    <div class="flex-align gap-6">
                                                        <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                    </div>
                                                    <span class="text-sm fw-medium text-gray-200">|</span>
                                                    <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                </div>
    
                                                <div class="flex-align gap-16">
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Camera
                                                    </a>
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Videos
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                    <td>
                                        <div class="d-flex rounded-4 overflow-hidden">
                                            <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-minus"></i>
                                            </button>
                                            <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                            <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                            <i class="ph ph-x-circle text-2xl d-flex"></i>
                                            Remove
                                        </button>
                                    </td>
                                    <td>
                                        <div class="table-product d-flex align-items-center gap-24">
                                            <a href="product-details-two.html" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                <img src="assets/images/thumbs/product-two-img2.png" alt="">
                                            </a>
                                            <div class="table-product__content text-start">
    
                                                <h6 class="title text-lg fw-semibold mb-8">
                                                    <a href="product-details.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                </h6>
    
                                                <div class="flex-align gap-16 mb-16">
                                                    <div class="flex-align gap-6">
                                                        <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                    </div>
                                                    <span class="text-sm fw-medium text-gray-200">|</span>
                                                    <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                </div>
    
                                                <div class="flex-align gap-16">
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Camera
                                                    </a>
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Videos
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                    <td>
                                        <div class="d-flex rounded-4 overflow-hidden">
                                            <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-minus"></i>
                                            </button>
                                            <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                            <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                            <i class="ph ph-x-circle text-2xl d-flex"></i>
                                            Remove
                                        </button>
                                    </td>
                                    <td>
                                        <div class="table-product d-flex align-items-center gap-24">
                                            <a href="product-details-two.html" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                <img src="assets/images/thumbs/product-two-img3.png" alt="">
                                            </a>
                                            <div class="table-product__content text-start">
    
                                                <h6 class="title text-lg fw-semibold mb-8">
                                                    <a href="product-details.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                </h6>
    
                                                <div class="flex-align gap-16 mb-16">
                                                    <div class="flex-align gap-6">
                                                        <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                    </div>
                                                    <span class="text-sm fw-medium text-gray-200">|</span>
                                                    <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                </div>
    
                                                <div class="flex-align gap-16">
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Camera
                                                    </a>
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Videos
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                    <td>
                                        <div class="d-flex rounded-4 overflow-hidden">
                                            <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-minus"></i>
                                            </button>
                                            <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                            <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="button" class="remove-tr-btn flex-align gap-12 hover-text-danger-600">
                                            <i class="ph ph-x-circle text-2xl d-flex"></i>
                                            Remove
                                        </button>
                                    </td>
                                    <td>
                                        <div class="table-product d-flex align-items-center gap-24">
                                            <a href="product-details-two.html" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                                                <img src="assets/images/thumbs/product-two-img4.png" alt="">
                                            </a>
                                            <div class="table-product__content text-start">
    
                                                <h6 class="title text-lg fw-semibold mb-8">
                                                    <a href="product-details.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                                </h6>
    
                                                <div class="flex-align gap-16 mb-16">
                                                    <div class="flex-align gap-6">
                                                        <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-md fw-semibold text-gray-900">4.8</span>
                                                    </div>
                                                    <span class="text-sm fw-medium text-gray-200">|</span>
                                                    <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                </div>
    
                                                <div class="flex-align gap-16">
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Camera
                                                    </a>
                                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                                                        Videos
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                    <td>
                                        <div class="d-flex rounded-4 overflow-hidden">
                                            <button type="button" class="quantity__minus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-minus"></i>
                                            </button>
                                            <input type="number" class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4" value="1" min="1">
                                            <button type="button" class="quantity__plus border border-end border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex-center hover-bg-main-600 hover-text-white">
                                                <i class="ph ph-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-lg h6 mb-0 fw-semibold">$125.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex-between flex-wrap gap-16 mt-16">
                        <div class="flex-align gap-16">
                            <input type="text" class="common-input" placeholder="Coupon Code">
                            <button type="submit" class="btn btn-main py-18 w-100 rounded-8">Apply Coupon</button>
                        </div>
                        <button type="submit" class="text-lg text-gray-500 hover-text-main-600">Update Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="cart-sidebar border border-gray-100 rounded-8 px-24 py-40">
                    <h6 class="text-xl mb-32">Cart Totals</h6>
                    <div class="bg-color-three rounded-8 p-24">
                        <div class="mb-32 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Subtotal</span>
                            <span class="text-gray-900 fw-semibold">$250.00</span>
                        </div>
                        <div class="mb-32 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Extimated Delivery</span>
                            <span class="text-gray-900 fw-semibold">Free</span>
                        </div>
                        <div class="mb-0 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Extimated Taxs</span>
                            <span class="text-gray-900 fw-semibold">USD 10.00</span>
                        </div>
                    </div>  
                    <div class="bg-color-three rounded-8 p-24 mt-24">
                        <div class="flex-between gap-8">
                            <span class="text-gray-900 text-xl fw-semibold">Total</span>
                            <span class="text-gray-900 text-xl fw-semibold">$250.00</span>
                        </div>
                    </div>  
                    <a href="checkout.html" class="btn btn-main mt-40 py-18 w-100 rounded-8">Proceed to checkout</a>
                </div>
            </div>   
        </div>
    </div>
 </section>
 
<!-- ================================ Cart Section End ================================ -->

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
@include('includes.footer')
    <!-- Jquery js -->
    <script src="frontend/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="frontend/assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="frontend/assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="frontend/assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="frontend/assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="frontend/assets/js/count-down.js"></script>
    <!-- jquery UI js -->
    <script src="frontend/assets/js/jquery-ui.js"></script>
    <!-- wow js -->
    <script src="frontend/assets/js/wow.min.js"></script>
    <!-- AOS Animation -->
    <script src="frontend/assets/js/aos.js"></script>
    <!-- marque -->
    <script src="frontend/assets/js/marque.min.js"></script>
    <!-- marque -->
    <script src="frontend/assets/js/vanilla-tilt.min.js"></script>
    <!-- Counter -->
    <script src="frontend/assets/js/counter.min.js"></script>
    <!-- main js -->
    <script src="frontend/assets/js/main.js"></script>

    </body>
</html>