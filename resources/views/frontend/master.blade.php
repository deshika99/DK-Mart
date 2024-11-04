<!DOCTYPE html>
<html lang="en" class="color-two font-exo">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> DK-Mart</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
</head>

<body>

@include('includes.navbar-2')


    <!-- ============================ Banner Section start =============================== -->
    @yield('content')
    <div class="preloader">
    <img src="frontend/assets/images/icon/preloader.gif" alt="">
  </div>

    @include('includes.footer')



    <!-- Jquery js -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
     <!-- Phosphor Icon -->
     <script src="{{ asset('frontend/assets/js/phosphor-icon.js') }}"></script>
    <!-- Select 2 -->
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Count Down js -->
    <script src="{{ asset('frontend/assets/js/count-down.js') }}"></script>
    <!-- jQuery UI js -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
     <!-- Wow js -->
     <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- AOS Animation -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- Marquee -->
    <script src="{{ asset('frontend/assets/js/marque.min.js') }}"></script>
     <!-- Vanilla Tilt -->
     <script src="{{ asset('frontend/assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/assets/js/counter.min.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<style>
    document.querySelectorAll('.has-sub-submenu').forEach(item => {
    item.addEventListener('mouseenter', () => {
        const submenu = item.querySelector('.sub-submenu-column');
        submenu.style.visibility = 'visible';
        submenu.style.opacity = '1';
    });
    item.addEventListener('mouseleave', () => {
        const submenu = item.querySelector('.sub-submenu-column');
        submenu.style.visibility = 'hidden';
        submenu.style.opacity = '0';
    });
});

</style>

</body>

</html>