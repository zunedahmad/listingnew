<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/remixicon.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/iconsax.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/metismenu.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/simplebar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/calendar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/sweetalert2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/jbox.all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/editor.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/loaders.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/header.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/sidebar-menu.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/responsive.css')}}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('admin/assets/images/favicon.svg')}}">
    <!-- Title -->
    <title>Senior Guru New</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <img src="{{asset('admin/assets/images/main-logo.svg')}}" alt="main-logo">
    </div>
    <!-- End Preloader Area -->
    <!-- Start All Section Area -->
    <div class="all-section-area">
        @include('admin/layout/header')
        @include('admin/layout/sidebar')
        <!-- Start Main Content Area -->
        <main class="main-content-wrap style-two">
            @yield('content')
            @include('admin/layout/footer')
        </main>
        <!-- End Main Content Area -->
    </div>
    <!-- End All Section Area -->
    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/simplebar.min.js')}}"></script>
    <!-- <script src="{{asset('admin/assets/js/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/apexcharts/hr-management.js')}}"></script> -->
    <script src="{{asset('admin/assets/js/geticons.js')}}"></script>
    <!-- <script src="{{asset('admin/assets/js/calendar.js')}}"></script>
    <script src="{{asset('admin/assets/js/calendar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/editor.js')}}"></script>
    <script src="{{asset('admin/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('admin/assets/js/ajaxchimp.min.js')}}"></script> -->
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    @yield('script')
</body>

</html>