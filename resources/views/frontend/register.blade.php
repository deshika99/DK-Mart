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
    
    @include('includes.navbar-2')

 
    
                
                  

                    
              
    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">My Account</h6>
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
                <li class="text-sm text-main-600"> Account </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

   <!-- =============================== Account Section Start =========================== -->
<section class="account d-flex justify-content-center align-items-center py-80" style="min-height: 100vh;">
    <div class="container container-lg">
        <form action="#">
            <div class="row gy-4 justify-content-center">
                <!-- Register Card Start -->
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
                        <h6 class="text-xl mb-32 text-center">Register</h6>
                        <div class="mb-24">
                            <label for="usernameTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Username <span class="text-danger">*</span></label>
                            <input type="text" class="common-input w-100" id="usernameTwo" placeholder="Write a username">
                        </div>
                        <div class="mb-24">
                            <label for="emailTwo" class="text-neutral-900 text-lg mb-8 fw-medium">Email address <span class="text-danger">*</span></label>
                            <input type="email" class="common-input w-100" id="emailTwo" placeholder="Enter Email Address">
                        </div>
                        <div class="mb-24">
                            <label for="enter-password" class="text-neutral-900 text-lg mb-8 fw-medium">Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <input type="password" class="common-input w-100" id="enter-password" placeholder="Enter Password">
                                <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#enter-password"></span>
                            </div>
                        </div>
                        <div class="my-48">
                            <p class="text-gray-500 text-center">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our 
                                <a href="#" class="text-main-600 text-decoration-underline">privacy policy</a>.
                            </p>
                        </div>
                        <div class="mt-48 text-center">
                            <button type="submit" class="btn btn-main py-18 px-40">Register</button>
                        </div>
                    </div>
                </div>
                <!-- Register Card End -->
            </div>
        </form>
    </div>
</section>
<!-- =============================== Account Section End =========================== -->


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