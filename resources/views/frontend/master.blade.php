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
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="frontend/assets/images/icon/preloader.gif" alt="">
  </div>
<!--==================== Preloader End ====================-->

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
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ======================= Middle Header Two Start ========================= -->
<header class="header-middle style-two bg-color-neutral">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.html" class="link">
                    <img src="frontend/assets/images/logo/logo-two.png" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- form Category Start -->
            <div class="flex-align gap-16">
                <div class="select-dropdown-for-home-two d-lg-none d-block">
                    <!-- Dropdown Select Start -->
<ul class="header-top__right style-two flex-align flex-wrap">
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
        <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    South Korea
                </a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
       <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    WON
                </a>
            </li>
        </ul>
    </li>
</ul>
<!-- Dropdown Select End -->
                </div>
                 
                <form action="#" class="flex-align flex-wrap form-location-wrapper">
                    <div class="search-category style-two d-flex h-48 search-form d-sm-flex d-none">
                        <select class="js-example-basic-single border border-gray-200 border-end-0 rounded-0 border-0" name="state">
                            <option value="1" selected disabled>All Categories</option>
                            <option value="1">Grocery</option>
                            <option value="1">Breakfast & Dairy</option>
                            <option value="1">Vegetables</option>
                            <option value="1">Milks and Dairies</option>
                            <option value="1">Pet Foods & Toy</option>
                            <option value="1">Breads & Bakery</option>
                            <option value="1">Fresh Seafood</option>
                            <option value="1">Fronzen Foods</option>
                            <option value="1">Noodles & Rice</option>
                            <option value="1">Ice Cream</option>
                        </select>
                        <div class="search-form__wrapper position-relative">
                            <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-0 border-0" placeholder="Search for a product or brand">
                        </div>
                        <button type="submit" class="bg-main-two-600 flex-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 d-lg-flex d-none"><i class="ph ph-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <!-- form Category start -->
             
            <!-- Header Middle Right start -->
            <div class="header-right flex-align d-lg-block d-none">
                <div class="header-two-activities flex-align flex-wrap gap-32">
    <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="account.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>
    <a href="wishlist.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph-fill ph-shuffle"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Compare</span>
    </a>
    <a href="cart.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
            </div>
            <!-- Header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header Two End ========================= -->

    <!-- ==================== Header Two Start Here ==================== -->
<header class="header bg-white border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper">

                <!-- Category Dropdown Start -->
                <div class="category-two d-block">
                    <button type="button" class="category__button flex-align gap-8 fw-medium bg-main-two-600 p-16 text-white">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown common-dropdown d-lg-none d-block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
    <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

    <div class="logo px-16 d-lg-none d-block">
        <a href="index.html" class="link">
            <img src="frontend/assets/images/logo/logo.png" alt="Logo">
        </a>
    </div>

    <ul class="scroll-sm p-0 py-8 overflow-y-auto">
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Cell Phone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Cell Phone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Wear</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Wear</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Computer</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Computer</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Headphone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Screen</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Home</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Home</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Digital Accessories</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Digital Accessories</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span> Value Added Services</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title"> Value Added Services</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Car Products</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Car Products</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Ecological Products</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Ecological Products</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Flat</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Flat</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Commercial Terminal</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Commercial Terminal</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Headphone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Screen</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.html">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.html">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.html">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.html">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.html">Itel</a>
                    </li>
                    <li>
                        <a href="shop.html">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
                </div> 
                <div class="category d-none on-hover-item bg-main-600 text-white">
                    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-white">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.html" class="link">
                                <img src="frontend/assets/images/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
    
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Soda &amp; Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Sports &amp; Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flavoured Water    </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats &amp; Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats &amp; Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Fresh &amp; Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast &amp; Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast &amp; Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Oats &amp; Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Granola &amp; Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits &amp; Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits &amp; Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cream Biscuits &amp; Wafers </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Glucose &amp; Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery &amp; Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery &amp; Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Lemon, Ginger &amp; Garlic </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Indian &amp; Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Dals &amp; pulses</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Orangic Millet &amp; Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="on-hover-item nav-menu__item has-submenu activePage">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item activePage">
                <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Grocery</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Electronics</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-three.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Fashion</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="wishlist.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="become-seller.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become Seller</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="vendor-two-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.html" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">

                <div class="select-dropdown-for-home-two d-lg-block d-none">
                    <!-- Dropdown Select Start -->
<ul class="header-top__right style-two flex-align flex-wrap">
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
        <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    South Korea
                </a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
       <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="frontend/assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    WON
                </a>
            </li>
        </ul>
    </li>
</ul>
<!-- Dropdown Select End -->
                 </div>
                
                <div class="me-8 d-lg-none d-block">
                    <div class="header-two-activities flex-align flex-wrap gap-32">
    <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="account.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>
    <a href="wishlist.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph-fill ph-shuffle"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Compare</span>
    </a>
    <a href="cart.html" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->

    <!-- ============================ Banner Section start =============================== -->
<div class="banner-two">
    <div class="container container-lg">
        <div class="banner-two-wrapper d-flex align-items-start">

            <div class="w-265 d-lg-block d-none flex-shrink-0">
                <div class="responsive-dropdown style-two common-dropdown nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100 position-relative border-top-0">
                    <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
    
                    <div class="logo px-16 d-lg-none d-block">
                        <a href="index.html" class="link">
                            <img src="frontend/assets/images/logo/logo.png" alt="Logo">
                        </a>
                    </div>
    
                    <ul class="responsive-dropdown__list scroll-sm p-0 py-8 overflow-y-auto">
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Cell Phone</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Cell Phone</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Wear</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Wear</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Computer</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Computer</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Headphone</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Smart Screen</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Smart Home</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Smart Home</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Digital Accessories</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Digital Accessories</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span> Value Added Services</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title"> Value Added Services</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Car Products</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Car Products</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Ecological Products</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Ecological Products</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Flat</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Flat</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Commercial Terminal</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Commercial Terminal</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Headphone</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                <span>Smart Screen</span>
                                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                            </a>
    
                            <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                    <li>
                                        <a href="shop.html">Samsung</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Iphone</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Vivo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Oppo</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Itel</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Realme</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="banner-item-two-wrapper rounded-24 overflow-hidden position-relative arrow-center flex-grow-1 mb-0">
                <img src="frontend/assets/images/bg/banner-two-bg.png" alt="" class="banner-img position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1 object-fit-cover rounded-24">
                <div class="banner-item-two__slider">
                    <div class="banner-item-two">   
                        <div class="banner-item-two__content">
                            <span class="text-white mb-8 h6 wow bounceInDown">Starting at only $250</span>
                            <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You Love For Less</h2>
                            <a href="shop.html" class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48 wow bounceInUp">
                                Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item-two__thumb position-absolute bottom-0 wow bounceInUp" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend/assets/images/thumbs/banner-two-img.png" alt="">
                        </div>
                    </div>
                    <div class="banner-item-two">   
                        <div class="banner-item-two__content">
                            <span class="text-white mb-8 h6 wow bounceInDown">Starting at only $250</span>
                            <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You Love For Less</h2>
                            <a href="shop.html" class="btn btn-outline-white d-inline-flex align-items-center rounded-pill gap-8 mt-48 wow bounceInUp">
                                Shop Now<span class="icon text-xl d-flex"><i class="ph ph-shopping-cart-simple"></i>   </span> 
                            </a>
                        </div>
                        <div class="banner-item-two__thumb position-absolute bottom-0 wow bounceInUp" data-wow-duration="1s" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                            <img src="frontend/assets/images/thumbs/banner-two-img2.png" alt="">
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
                            <img src="frontend/assets/images/thumbs/promo-img1.png" alt="">
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
                            <img src="frontend/assets/images/thumbs/promo-img2.png" alt="">
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
                            <img src="frontend/assets/images/thumbs/promo-img3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ promotional banner End ========================== -->

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
                            <button type="button" id="deal-week-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="deal-week-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deal-week-box rounded-16 overflow-hidden flex-between position-relative z-1 mb-24">
                <img src="frontend/assets/images/bg/week-deal-bg.png" alt="" class="position-absolute inset-block-start-0 inset-block-start-0 w-100 h-100 z-n1 object-fit-cover">
                <div class="d-lg-block d-none ps-32 flex-shrink-0" data-aos="zoom-in">
                    <img src="frontend/assets/images/thumbs/week-deal-img1.png" alt="">
                </div>
                <div class="deal-week-box__content px-sm-4 d-block w-100 text-center">
                    <h6 class="mb-20 wow bounceIn">Apple AirPods Max, Over Ear Headphones</h6>
                    <div class="countdown mt-20" id="countdown4">
                        <ul class="countdown-list style-four flex-center flex-wrap">
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
                <div class="d-lg-block d-none flex-shrink-0 pe-xl-5" data-aos="zoom-in">
                    <div class="me-xxl-5">
                        <img src="frontend/assets/images/thumbs/week-deal-img2.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="deals-week-slider arrow-style-two">
                <div data-aos="fade-up" data-aos-duration="200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold </span>
                            <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="400">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                            <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New </span>
                            <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                            <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                            <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                            <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1400">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New </span>
                            <img src="frontend/assets/images/thumbs/product-two-img9.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <div class="flex-align gap-6">
                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                            </h6>
                            <div class="flex-align gap-4">
                                <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-8">
                                <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                            </div>

                            <div class="product-card__price my-20">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
        
                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Deals Week End ================================ -->


    <!-- ========================= Top Selling Products Start ================================ -->
<section class="top-selling-products pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Top Selling Products</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                        <div class="flex-align gap-8">
                            <button type="button" id="top-selling-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="top-selling-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-12">
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="800">
                    <div class="position-relative rounded-16 overflow-hidden p-28 z-1 text-center">
                        <img src="frontend/assets/images/bg/deal-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100">
                        <div class="py-xl-4">
                            <h6 class="mb-4 fw-semibold">Polaroid Now+ Gen 2 - White</h6>
                            <h5 class="mb-40 fw-semibold">Fresh Vegetables</h5>
                            <a href="cart.html" class="btn text-heading border-neutral-600 hover-bg-neutral-600 hover-text-white py-16 px-24 flex-center d-inline-flex rounded-pill gap-8 fw-medium" tabindex="0">
                                Shop Now <i class="ph ph-shopping-cart text-xl d-flex"></i> 
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
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold </span>
                                    <img src="frontend/assets/images/thumbs/product-two-img7.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>

                                    <div class="product-card__price my-20">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
             
                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="400">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                    <img src="frontend/assets/images/thumbs/product-two-img8.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>

                                    <div class="product-card__price my-20">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
             
                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="600">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New </span>
                                    <img src="frontend/assets/images/thumbs/product-two-img9.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>

                                    <div class="product-card__price my-20">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
             
                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                    <img src="frontend/assets/images/thumbs/product-two-img10.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>

                                    <div class="product-card__price my-20">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
             
                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                    <img src="frontend/assets/images/thumbs/product-two-img8.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <div class="flex-align gap-6">
                                        <span class="text-xs fw-medium text-gray-500">4.8</span>
                                        <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg fw-semibold mt-12 mb-8">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                                    </h6>
                                    <div class="flex-align gap-4">
                                        <span class="text-tertiary-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-100 bg-color-three rounded-pill h-4" role="progressbar" aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-tertiary-600 rounded-pill" style="width: 35%"></div>
                                        </div>
                                        <span class="text-gray-900 text-xs fw-medium mt-8">Sold: 18/35</span>
                                    </div>

                                    <div class="product-card__price my-20">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
             
                                    <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
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
<!-- ========================= Top Selling Products End ================================ -->


    <!-- ========================= Trending Products Start ================================ -->
<section class="trending-productss pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
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

            <div class="trending-products-box rounded-16 overflow-hidden flex-between position-relative mb-24">
                <div class="d-md-block d-none ps-xxl-5 ps-md-4" data-aos="zoom-in" data-aos-duration="800" >
                    <img src="frontend/assets/images/thumbs/trending-products-img1.png" alt="">
                </div>
                <div class="trending-products-box__content px-4 d-block w-100 text-center py-32 wow bounceIn">
                    <h6 class="mb-0 trending-products-box__title">Laptop Pro <span class="h4 mb-0 fw-semibold">20% </span> off All Time  On Order Now $980</h6>
                </div>
                <div class="d-md-block d-none pe-xxl-5 me-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800" >
                    <img src="frontend/assets/images/thumbs/trending-products-img2.png" alt="">
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
                    <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                    <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                </div>
                <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
        <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
            <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
            </a>
            <div class="product-card__content mt-16">
                <span class="text-success-600 bg-success-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                <h6 class="title text-lg fw-semibold my-16">
                    <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                </h6>
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

                <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                <div class="product-card__price mt-16 mb-30">
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
<!-- ========================= Trending Products End ================================ -->


    <!-- =============================== Discount Start ============================ -->
<section class="discount py-80">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="discount-item rounded-16 overflow-hidden position-relative z-1 h-100 d-flex flex-column align-items-start justify-content-center">
                    <img src="frontend/assets/images/bg/discount-bg1.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1">
                    <div class="w-100 flex-between gap-20">
                        <div class="discount-item__content">
                            <span class="fw-semibold text-tertiary-600 mb-20">UP TO 30% OFF</span>
                            <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6>
                            <a href="shop.html" class="btn btn-outline-black rounded-pill gap-8" tabindex="0">
                                Shop Now
                            </a>
                        </div>
                        <img src="frontend/assets/images/thumbs/discount-img1.png" alt="" class="d-sm-block d-none">
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="discount-item rounded-16 overflow-hidden position-relative z-1 h-100 d-flex flex-column align-items-center justify-content-center">
                    <img src="frontend/assets/images/bg/discount-bg2.jpg" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 w-100 h-100 z-n1">
                    <div class="w-100 flex-between gap-20">
                        <div class="discount-item__content">
                            <span class="fw-semibold text-tertiary-600 mb-20">UP TO 30% OFF</span>
                            <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6>
                            <a href="shop.html" class="btn btn-outline-black rounded-pill gap-8" tabindex="0">
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
<!-- =============================== Discount End ============================ -->

    <section class="featured-products overflow-hidden">
    <div class="container container-lg">        
        <div class="row g-4 flex-wrap-reverse">
            <div class="col-xxl-8">
                <div class="border border-gray-100 p-24 rounded-16">
                    <div class="section-heading mb-24">
                        <div class="flex-between flex-wrap gap-8">
                            <h5 class="mb-0 wow bounceInLeft">Featured Products </h5>
                            <div class="flex-align gap-16 wow bounceInRight">
                                <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                                <div class="flex-align gap-8">
                                    <button type="button" id="featured-products-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                        <i class="ph ph-caret-left"></i>
                                    </button>
                                    <button type="button" id="featured-products-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                        <i class="ph ph-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 featured-product-slider">
                        <div class="col-xxl-6">
                            <div class="featured-products__sliders">
                                <div class="" data-aos="fade-up" data-aos-duration="800" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                            <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="" data-aos="fade-up" data-aos-duration="1000" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                            <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="featured-products__sliders">
                                <div class="" data-aos="fade-up" data-aos-duration="800" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Sale</span>
                                            <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="" data-aos="fade-up" data-aos-duration="1000" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                            <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="featured-products__sliders">
                                <div class="" data-aos="fade-up" data-aos-duration="800" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50% </span>
                                            <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
                                                Add To Cart <i class="ph ph-shopping-cart"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="" data-aos="fade-up" data-aos-duration="1000" >
                                    <div class="mt-24 product-card d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                        <a href="product-details-two.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best seller</span>
                                            <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                        </a>
                                        <div class="product-card__content my-20 flex-grow-1">
                                            <h6 class="title text-lg fw-semibold mb-12">
                                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">iPhone 15 Pro Warp Charge 30W Power Adapter</a>
                                            </h6>
                                            <div class="flex-align gap-6 mb-12">
                                                <span class="text-xs fw-medium text-gray-500">4.8</span>
                                                <span class="text-15 fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-xs fw-medium text-gray-500">(17k)</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-main-two-600 text-md d-flex"><i class="ph-fill ph-storefront"></i></span>
                                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                            </div>
                                            <div class="product-card__price my-20">
                                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                            </div>
                        
                                            <a href="cart.html" class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex-center gap-8 fw-medium" tabindex="0">
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
                <div class="position-relative rounded-16 bg-light-purple overflow-hidden p-28 pb-0 z-1 text-center h-100" data-aos="fade-up" data-aos-duration="1000" >
                    <img src="frontend/assets/images/bg/featured-product-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                    <div class="py-xl-4 text-center">
                        <span class="h6 mb-20 text-white">iPhone Smart Phone - Red</span>
                        <div class="flex-center gap-12 text-white">
                            <span class="">FROM</span>
                            <h4 class="mb-8 text-white">$890</h4>
                            <span class="badge-style-two position-relative me-8 bg-main-two-600 text-white text-sm py-2 px-8 rounded-4">20% off</span>
                        </div>
                        <a href="shop.html" class="mt-16 mb-24 btn btn-main-two fw-medium d-inline-flex align-items-center rounded-pill gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl d-flex"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                    <img src="frontend/assets/images/thumbs/featured-product-img.png" alt="" class="d-xxl-inline-flex d-none wow bounceInUp">
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- ========================= Big Deal Section Start =============================== -->
<div class="big-deal rounded-16 overflow-hidden flex-between position-relative mb-24 py-80">
    <div class="container container-lg">
        <div class="big-deal-box position-relative z-1 rounded-16 py-40 overflow-hidden">
            <img src="frontend/assets/images/bg/big-deal-pattern.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">

            <div class="row gy-4 align-items-center">
                <div class="col-md-3 text-center d-md-block d-none" data-aos="zoom-out" data-aos-duration="1000" >
                    <img src="frontend/assets/images/thumbs/big-deal1.png" alt="">
                </div>
                <div class="col-md-6 big-deal-box__content text-center">
                    <h4 class="mb-20 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">WATCHES BIG DEAL</h4>
                    <p class="text-heading fw-medium" data-aos="zoom-in" data-aos-duration="1000">Wonlex KT07 4G positioning watches</p>
                </div>
                <div class="col-md-3 text-center d-md-block d-none" data-aos="zoom-out" data-aos-duration="1000" >
                    <img src="frontend/assets/images/thumbs/big-deal2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================= Big Deal Section End =============================== -->


    <!-- ========================= Top Selling Products Start ================================ -->
<section class="recommended overflow-hidden">
    <div class="container container-lg">
        <div class="row g-12">
            <div class="col-xxl-4">
                <div class="position-relative rounded-16 bg-light-purple overflow-hidden p-28 z-1 text-center h-100" data-aos="zoom-in" data-aos-duration="800" >
                    <img src="frontend/assets/images/bg/recommended-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
                    <div class="py-xl-4 text-center">
                        <span class="h6 mb-20 text-white">Insta360 GO 3S Action Camera - White</span>
                        <div class="flex-center gap-12 text-white">
                            <span class="">FROM</span>
                            <h4 class="mb-8 text-white">$430</h4>
                            <span class="badge-style-two position-relative me-8 bg-main-two-600 text-white text-sm py-2 px-8 rounded-4">20% off</span>
                        </div>
                    </div>
                    <img src="frontend/assets/images/thumbs/recommended-img.png" alt="" class="mt-48 d-xxl-block d-none wow bounceIn">
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="border border-gray-100 p-24 rounded-16">
                    <div class="section-heading mb-24">
                        <div class="flex-between flex-wrap gap-8">
                            <h5 class="mb-0 wow bounceInLeft">Recommended For You</h5>
                            <div class="flex-align gap-16 wow bounceInRight">
                                <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All</a>
                                <div class="flex-align gap-8">
                                    <button type="button" id="recommended-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                        <i class="ph ph-caret-left"></i>
                                    </button>
                                    <button type="button" id="recommended-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1" >
                                        <i class="ph ph-caret-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="recommended-slider">
                        <div data-aos="fade-up" data-aos-duration="400">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                                    <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                    </h6>
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
        
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>
        
                                    <div class="product-card__price mt-16 mb-30">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="600">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                    <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                    </h6>
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
        
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>
        
                                    <div class="product-card__price mt-16 mb-30">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="800">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                                    <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                    </h6>
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
        
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>
        
                                    <div class="product-card__price mt-16 mb-30">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                    <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                    </h6>
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
        
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>
        
                                    <div class="product-card__price mt-16 mb-30">
                                        <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                        <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                                    </div>
                                    <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1200">
                            <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                                <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                                    <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                                    <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                                </a>
                                <div class="product-card__content mt-16">
                                    <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                                    <h6 class="title text-lg fw-semibold my-16">
                                        <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                                    </h6>
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
        
                                    <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>
        
                                    <div class="product-card__price mt-16 mb-30">
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
<!-- ========================= Top Selling Products End ================================ -->


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
                <div class="d-lg-block d-none ps-32" data-aos="zoom-in" data-aos-duration="800" >
                    <img src="frontend/assets/images/thumbs/expensive-offer1.png" alt="">
                </div>
                <div class="popular-products-box__content px-sm-4 d-block w-100 text-center py-20">
                    <div class="flex-align gap-16 justify-content-center" data-aos="zoom-in" data-aos-duration="800" >
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
                <div class="d-lg-block d-none" data-aos="zoom-in" data-aos-duration="800" >
                    <img src="frontend/assets/images/thumbs/expensive-offer2.png" alt="">
                </div>
            </div>
            
            <div class="row gy-4">
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img1.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Headphone & Earphone</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img2.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">TV & Smart Home</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img3.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Video Games</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img4.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Computer & Tablets</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img5.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Car & GPS</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img6.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Camera & Video</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img7.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Kitchen Appliance</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6 col-xs-6 wow bounceIn">
                    <div class="product-card h-100 d-flex gap-16 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex-center h-unset rounded-8 bg-gray-50 position-relative w-unset flex-shrink-0 p-24" tabindex="0">
                            <img src="frontend/assets/images/thumbs/popular-img8.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content flex-grow-1">
                            <h6 class="title text-lg fw-semibold mb-12">
                                <a href="product-details.html" class="link text-line-2" tabindex="0">Phone & Accessories</a>
                            </h6>
                            <span class="text-gray-600 text-sm mb-4">Wired Headphones</span>
                            <span class="text-gray-600 text-sm mb-4">Over-Ear Headphone</span>
                            <span class="text-gray-600 text-sm mb-4">Sports Headphone</span>
                            <span class="text-gray-600 text-sm mb-0">Earbud Headphone</span>

                            <a href="shop.html" class="text-tertiary-600 flex-align gap-8 mt-24">
                                All Categories
                                <i class="ph ph-arrow-right d-flex"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Popular Products End ================================ -->


    <!-- =========================== Top Vendor Section Start ========================== -->
<section class="top-vendor py-80 overflow-hidden">
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
        
            <div class="row gy-4 vendor-card-wrapper">
                <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                            <h6 class="title mt-32 text-lg">Organic Market</h6>

                            <div class="flex-align gap-6 justify-content-center">
                                <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-md fw-medium text-heading">4.8</span>
                                <span class="text-md fw-medium text-heading">(12K)</span>
                            </div>
                        </div>
                        <div class="position-relative slick-arrows-style-three">
                            <button type="button" id="vendor-prev" class="slick-prev slick-arrow position-absolute top-50 translate-middle-y flex-center rounded-circle bg-neutral-600 hover-bg-main-two-600 w-24 h-24 text-white text-sm z-1 transition-1 inset-inline-start-0">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="vendor-next" class="slick-next slick-arrow position-absolute top-50 translate-middle-y flex-center rounded-circle bg-neutral-600 hover-bg-main-two-600 w-24 h-24 text-white text-sm z-1 transition-1 inset-inline-end-0">
                                <i class="ph ph-caret-right"></i>
                            </button>
                            <div class="vendor-card__list style-two mt-22">
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img4.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img5.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                            <h6 class="title mt-32 text-lg">Best Buy</h6>

                            <div class="flex-align gap-6 justify-content-center">
                                <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-md fw-medium text-heading">4.8</span>
                                <span class="text-md fw-medium text-heading">(12K)</span>
                            </div>
                        </div>
                        <div class="position-relative slick-arrows-style-three">
                            <div class="vendor-card__list style-two mt-22">
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img7.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img8.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img9.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img10.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img11.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                            <h6 class="title mt-32 text-lg">Organic Market</h6>

                            <div class="flex-align gap-6 justify-content-center">
                                <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-md fw-medium text-heading">4.8</span>
                                <span class="text-md fw-medium text-heading">(12K)</span>
                            </div>
                        </div>
                        <div class="position-relative slick-arrows-style-three">
                            <div class="vendor-card__list style-two mt-22">
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img1.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img4.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img5.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6 wow bounceIn">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="frontend/assets/images/thumbs/vendor-logo1.png" alt="" class="vendor-card__logo m-12">
                            <h6 class="title mt-32 text-lg">Best Buy</h6>

                            <div class="flex-align gap-6 justify-content-center">
                                <span class="text-lg fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                <span class="text-md fw-medium text-heading">4.8</span>
                                <span class="text-md fw-medium text-heading">(12K)</span>
                            </div>
                        </div>
                        <div class="position-relative slick-arrows-style-three">
                            <div class="vendor-card__list style-two mt-22">
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img6.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img7.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img8.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img9.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
                                        <img src="frontend/assets/images/thumbs/vendor-two-img10.png" alt="">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="vendor-card__item bg-white rounded-circle flex-center">
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
<!-- =========================== Top Vendor Section End ========================== -->


    <!-- ================================== Day Sale Section Start =================================== -->
<section class="day-sale">
    <div class="container container-lg">    
        <div class="day-sale-box rounded-16 overflow-hidden flex-between position-relative mb-24 z-1">

            <img src="frontend/assets/images/bg/day-sale-bg.png" alt="" class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 cover-img">
            <div class="d-xl-block d-none" data-aos="zoom-in" data-aos-duration="800" >
                <img src="frontend/assets/images/thumbs/day-sale-img1.png" alt="">
            </div>
            <div class="day-sale-box__content d-block w-100 text-start py-32 ps-lg-0 ps-24">
                <h3 class="text-white fw-medium mb-24">CYBER MONDAY SALE</h3>
                <h6 class="text-white fw-medium mb-8">UP TO 30% OFF</h6>
                <h6 class="text-white fw-medium mb-0">COMPUTER & MOBILE ACCESSORIES</h6>
                <a href="shop.html" class="btn btn-outline-white flex-align d-inline-flex rounded-pill gap-8 mt-28" tabindex="0">
                    Shop Now <i class="ph ph-plus text-xl d-flex"></i> 
                </a>
            </div>
            <div class="d-md-block d-none pe-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800" >
                <img src="frontend/assets/images/thumbs/day-sale-img2.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- ================================== Day Sale Section End =================================== -->

    <!-- ========================= recently viewed Start ================================ -->
<section class="recently-viewed pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Recently Viewed Products</h5>
                    <div class="flex-align gap-16 wow bounceInRight">
                        <a href="shop.html" class="text-sm fw-medium text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Products</a>
                    </div>
                </div>
            </div>

            <div class="row g-12">
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                            <img src="frontend/assets/images/thumbs/product-two-img1.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="400">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                            <img src="frontend/assets/images/thumbs/product-two-img2.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="600">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sale 50%</span>
                            <img src="frontend/assets/images/thumbs/product-two-img3.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                            <img src="frontend/assets/images/thumbs/product-two-img4.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">Best Seller </span>
                            <img src="frontend/assets/images/thumbs/product-two-img5.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
                                <span class="text-gray-400 text-md fw-semibold text-decoration-line-through"> $28.99</span>
                                <span class="text-heading text-md fw-semibold ">$14.99 <span class="text-gray-500 fw-normal">/Qty</span> </span>
                            </div>
                            <span class="text-neutral-600">Delivered by <span class="text-main-600">Aug 02</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="product-card h-100 p-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                        <a href="product-details-two.html" class="product-card__thumb flex-center rounded-8 bg-gray-50 position-relative">
                            <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white position-absolute inset-inline-start-0 inset-block-start-0">New</span>
                            <img src="frontend/assets/images/thumbs/product-two-img6.png" alt="" class="w-auto max-w-unset">
                        </a>
                        <div class="product-card__content mt-16">
                            <span class="text-main-600 bg-main-50 text-sm fw-medium py-4 px-8">19%OFF</span>
                            <h6 class="title text-lg fw-semibold my-16">
                                <a href="product-details-two.html" class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera - Green</a>
                            </h6>
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

                            <span class="py-2 px-8 text-xs rounded-pill text-main-two-600 bg-main-two-50 mt-16">Fulfilled by Marketpro</span>

                            <div class="product-card__price mt-16 mb-30">
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
</section>
<!-- ========================= recently viewed End ================================ -->


    <!-- ============================== Top Brand Section Start ==================================== -->
<div class="top-brand py-80">
    <div class="container container-lg">
        <div class="border border-gray-100 p-24 rounded-16">
            <div class="section-heading mb-24">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">Top Brands</h5>
                    <div class="flex-align gap-8">
                        <button type="button" id="topBrand-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-two-600 text-xl hover-bg-main-two-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="topBrand-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-two-600 text-xl hover-bg-main-two-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="top-brand__slider">
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img1.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img2.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img3.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img4.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img5.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img6.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img7.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img8.png" alt="">
                    </div>
                </div>
                <div class="wow bounceIn">
                    <div class="top-brand__item flex-center rounded-8 border border-gray-100 hover-border-gray-200 transition-1 px-8">
                        <img src="frontend/assets/images/thumbs/top-brand-img5.png" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- ============================== Top Brand Section End ==================================== -->

    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-80" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="400">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="600">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-two-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
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
    
    
<!-- ==================== Footer Two Start Here ==================== -->
<footer class="footer py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="footer-item-two-wrapper d-flex align-items-start flex-wrap">
            <div class="footer-item max-w-275" data-aos="fade-up" data-aos-duration="200">
                <div class="footer-item__logo">
                    <a href="index.html"> <img src="frontend/assets/images/logo/logo-two-black.png" alt=""></a>
                </div>
                <p class="mb-24">Marketpro  become the largest computer parts, gaming pc parts, and other IT related products.</p>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                    <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, California, USA</span>
                </div>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="400">
                <h6 class="footer-item__title">About us</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Company Profile</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">All Retail Store</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Merchant Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Feedback</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Huawei Group</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Rules & Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="600">
                <h6 class="footer-item__title">Customer Support</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="contact.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Gift Card</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                    <li class="">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Redeem Voucher</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="800">
                <h6 class="footer-item__title">My Account</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Product Support</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="footer-item__title">Information</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer-item" data-aos="fade-up" data-aos-duration="1200">
                <h6 class="">Shop on The Go</h6>
                <p class="mb-16">Marketpro App is available.  Get it now</p>
                <div class="flex-align gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                        <img src="frontend/assets/images/thumbs/store-img1.png" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                        <img src="frontend/assets/images/thumbs/store-img2.png" alt="">
                    </a>
                </div>

                <ul class="flex-align gap-16">
                    <li>
                        <a href="https://www.facebook.com" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-facebook-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-twitter-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-instagram-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-linkedin-logo"></i>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer bg-color-three py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved </p>
            <div class="flex-align gap-8 flex-wrap wow fadeInRightBig">
                <span class="text-heading text-sm">We Are Accepting</span>
                <img src="frontend/assets/images/thumbs/payment-method.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer Two End Here ==================== -->
  

    
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