@extends ('frontend.master')

@section('content')

    


<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            <img src="frontend/assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->

    
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->



    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb mb-0 py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Contact</h6>
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
                <li class="text-sm text-main-600"> Contact </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

    <!-- ============================ Contact Section Start ================================== -->
<section class="contact py-80">
    <div class="container container-lg">
        <div class="row gy-5">
            <div class="col-lg-8">
                <div class="contact-box border border-gray-100 rounded-16 px-24 py-40">
                    <form action="#">
                        <h6 class="mb-32">Make Custom Request</h6>
                        <div class="row gy-4">
                            <div class="col-sm-6 col-xs-6">
                                <label for="name" class="flex-align gap-4 text-sm font-heading-two text-gray-900 fw-semibold mb-4">Full Name <span class="text-danger text-xl line-height-1">*</span> </label>
                                <input type="text" class="common-input px-16" id="name" placeholder="Full name">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="email" class="flex-align gap-4 text-sm font-heading-two text-gray-900 fw-semibold mb-4">Email Address <span class="text-danger text-xl line-height-1">*</span> </label>
                                <input type="email" class="common-input px-16" id="email" placeholder="Email address">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="phone" class="flex-align gap-4 text-sm font-heading-two text-gray-900 fw-semibold mb-4">Phone Number<span class="text-danger text-xl line-height-1">*</span> </label>
                                <input type="number" class="common-input px-16" id="phone" placeholder="Phone Number*">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label for="subject" class="flex-align gap-4 text-sm font-heading-two text-gray-900 fw-semibold mb-4">Subject <span class="text-danger text-xl line-height-1">*</span> </label>
                                <input type="text" class="common-input px-16" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-sm-12">
                                <label for="message" class="flex-align gap-4 text-sm font-heading-two text-gray-900 fw-semibold mb-4">Message <span class="text-danger text-xl line-height-1">*</span> </label>
                                <textarea class="common-input px-16" id="message" placeholder="Type your message"></textarea>
                            </div>
                            <div class="col-sm-12 mt-32">
                                <button type="submit" class="btn btn-main py-18 px-32 rounded-8">Get a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-box border border-gray-100 rounded-16 px-24 py-40">
                    <h6 class="mb-48">Get In Touch</h6>
                    <div class="flex-align gap-16 mb-16">
                        <span class="w-40 h-40 flex-center rounded-circle border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                        <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                    </div>
                    <div class="flex-align gap-16 mb-16">
                        <span class="w-40 h-40 flex-center rounded-circle border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                        <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                    </div>
                    <div class="flex-align gap-16 mb-0">
                        <span class="w-40 h-40 flex-center rounded-circle border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                        <span class="text-md text-gray-900 ">789 Inner Lane, California, USA</span>
                    </div>
                </div>
                <div class="mt-24 flex-align flex-wrap gap-16">
                    <a href="#" class="bg-neutral-600 hover-bg-main-600 rounded-8 p-10 px-16 flex-between flex-wrap gap-8 flex-grow-1">
                        <span class="text-white fw-medium">Get Support On Call</span>
                        <span class="w-36 h-36 bg-main-600 rounded-8 flex-center text-xl text-white"><i class="ph ph-headset"></i></span>
                    </a>
                    <a href="#" class="bg-neutral-600 hover-bg-main-600 rounded-8 p-10 px-16 flex-between flex-wrap gap-8 flex-grow-1">
                        <span class="text-white fw-medium">Get Direction</span>
                        <span class="w-36 h-36 bg-main-600 rounded-8 flex-center text-xl text-white"><i class="ph ph-map-pin"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Contact Section End ================================== -->

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

      
 
 @endsection


