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
            <div class="logo"style="margin-left: 120px;  margin-top: 0; margin-bottom: 0;">
                <a href="index.html" class="link">

                    <img src="{{ asset('frontend/assets/images/logo/logo-two.png') }}" alt="Logo" style="width:110px;height:110px; margin-top: 0; margin-bottom: 0; ">

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
                    <select class="js-example-basic-single border border-gray-200 border-end-0 rounded-0 border-0" name="category">
                        <option value="" selected disabled>All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
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
    <div class="dropdown-menu"  style="width: 170px">
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
<div class="category d-block on-hover-item bg-main-600 text-white">
    <button type="button" class="category__button flex-align gap-8 fw-medium p-16 border-end border-start border-gray-100 text-white">
        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
        <span class="d-sm-flex d-none">All</span> Categories
        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
    </button>

    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> 
            <i class="ph ph-x"></i> 
        </button>

        <ul class="responsive-dropdown__list scroll-sm p-0 py-8 overflow-y-auto">
            @foreach ($categories as $category)
                <li class="has-submenus-submenu" style="width: 240px;">
                    <a href="{{ url('/shop?category_id=' . $category->id) }}" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                        <span>{{ $category->name }}</span>
                        <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                    </a>

                    <!-- Subcategories Column -->
                    @if ($category->subcategories->isNotEmpty())
                        <div class="submenus-submenu py-16">
                            <h6 class="text-lg px-16 submenus-submenu__title">{{ $category->name }}</h6>
                            <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                @foreach ($category->subcategories as $subcategory)
                                    <li class="has-sub-submenu">
                                        <a href="{{ url('/shop?subcategory_id=' . $subcategory->id) }}">{{ $subcategory->name }}</a>

                                        <!-- Sub-Subcategories Column -->
                                        @if ($subcategory->subSubcategories->isNotEmpty())
                                            <div class="sub-submenu-column">
                                                <ul class="sub-submenu max-h-300 overflow-y-auto scroll-sm">
                                                    @foreach ($subcategory->subSubcategories as $subSubcategory)
                                                        <li>
                                                            <a href="{{ url('/shop?subsubcategory_id=' . $subSubcategory->id) }}">{{ $subSubcategory->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Category Dropdown End -->

<!-- Other Menu Items -->
<div class="header-menu d-lg-block d-none">
    <ul class="nav-menu flex-align ">
        <li class="nav-menu__item">
            <a href="/home" class="nav-menu__link">Home</a>
        </li>
        <li class="nav-menu__item">
            <a href="/shop" class="nav-menu__link">Shop</a>
        </li>
        <li class="nav-menu__item">
            <a href="/about" class="nav-menu__link">About Us</a>
        </li>
        <li class="nav-menu__item">
            <a href="/contact" class="nav-menu__link">Contact Us</a>
        </li>
        <li class="nav-menu__item">

    
            <a href="vendor-two.html" class="nav-menu__link">Vendors</a>
        </li>
    </ul>
</div>

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
