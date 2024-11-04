<style>
    /* Dropdown styles */
.profile-dropdown {
    position: relative;
}

.profile-toggle {
    cursor: pointer;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    padding: 10px;
    z-index: 10;
    min-width: 60px;
}

.dropdown-item {
    color: hsl(0, 2%, 66%);
    padding: 8px 12px;
    text-decoration: none;
    display: block;
}

.dropdown-item:hover {
    background-color: #f2f2f2;
    color: rgb(238, 82, 10);
}

.profile-dropdown:hover .dropdown-menu {
    display: block;
}

</style>
<!--==================== Preloader Start ====================-->
<div class="preloader">
    <img src="assets/images/icon/preloader.gif" alt="">
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
            <img src="assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="nav-menu__item">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
       
    </li>
    <li class="nav-menu__item">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
        
    </li>
    <li class="nav-menu__item">
       
        <a href="javascript:void(0)" class="nav-menu__link">About Us</a>
      
    </li>
    <li class="nav-menu__item">
       
        <a href="{{ route('contact') }}" class="nav-menu__link">Contact Us</a>
       
    </li>
   
    <li class="nav-menu__item">
        <a href="vendor-two.html" class="nav-menu__link">Vendors</a>
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
                    <img src="frontend/assets/images/logo/logo-two.png" alt="Logo" style="width:90px;height:90px;">
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
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
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
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
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
  <!-- Profile Dropdown -->
  <div class="profile-dropdown">
    <a href="#" class="flex-align flex-column gap-8 item-hover-two profile-toggle">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>

    <!-- Dropdown Menu -->
    <div class="dropdown-menu">
        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
        <a href="{{ route('register') }}" class="dropdown-item">Sign Up</a>
    </div>
</div>

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
                <div class="category-two d-none">
                    <button type="button" class="category__button flex-align gap-8 fw-medium bg-main-two-600 p-16 text-white">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown common-dropdown d-lg-none d-block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
    <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

    <div class="logo px-16 d-lg-none d-block">
        <a href="index.html" class="link">
            <img src="assets/images/logo/logo.png" alt="Logo">
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
                <div class="category d-block on-hover-item bg-main-600 text-white">
                    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-white">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.html" class="link">
                                <img src="assets/images/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-650 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"></span>
                                    <span>Cell Phone</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
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

                            <!-- Additional categories go here (Beverages, Meats & Seafood, etc.) -->

            <!-- New Item 1: Bakery & Pastries -->
            <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Wear</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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

            <!-- New Item 2: Health & Wellness -->
            <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Computer</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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
              <!-- New Item 2: Health & Wellness -->
              <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Headphone</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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
              <!-- New Item 2: Health & Wellness -->
              <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Smart Screen</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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
              <!-- New Item 2: Health & Wellness -->
              <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Smart Home</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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

              <!-- New Item 2: Health & Wellness -->
              <li class="has-submenus-submenu">
                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                    <span class="text-xl d-flex"></span>
                    <span>Digital Accessories</span>
                    <span class="icon text-md d-flex ms-auto"></span>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>Value Added Services</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Value Added Services</h6>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>Car Products</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>Ecological Products</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>Flat</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>Commercial Terminal</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
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
                                    <span class="text-xl d-flex"></span>
                                    <span>HeadPhone</span>
                                    <span class="icon text-md d-flex ms-auto"></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">HeadPhone</h6>
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
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="nav-menu__item">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        
    </li>
    <li class="nav-menu__item">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
        
    </li>
    <li class="nav-menu__item">
        
        <a href="javascript:void(0)" class="nav-menu__link">About Us</a>
       
    </li>
    <li class="nav-menu__item">
       
        <a href="{{ route('contact') }}" class="nav-menu__link">Contact Us</a>
       
    </li>
   
    <li class="nav-menu__item">
        <a href="vendor-two.html" class="nav-menu__link">Vendors</a>
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
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
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
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
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
   <!-- Profile Dropdown -->
   <div class="profile-dropdown">
    <a href="#" class="flex-align flex-column gap-8 item-hover-two profile-toggle">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>

    <!-- Dropdown Menu -->
    <div class="dropdown-menu">
        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
        <a href="{{ route('register') }}" class="dropdown-item">Sign Up</a>
    </div>
</div>

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
