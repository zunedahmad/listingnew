<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/iconsax.css')}}">
    <link rel="stylesheet" href="assets/css/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/calendar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/jbox.all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/loaders.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/responsive.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('admin/assets/images/favicon.svg')}}">
    <!-- Title -->
    <title>Admin Login</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Account Area -->
    <div class="account-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="account-content">
                        <div class="account-header">
                            <a href="javascript:void(0);">
                                <img src="{{asset('admin/assets/images/main-logo.svg')}}" alt="main-logo">
                            </a>
                            <h3>Login</h3>
                        </div>

                        <form class="account-wrap" action="{{route('admin.login.store')}}" method="post">
                            @csrf
                            <div class="form-group mb-24 icon">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <img src="{{asset('admin/assets/images/icon/sms.svg')}}" alt="sms">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <img src="{{asset('admin/assets/images/icon/key.svg')}}" alt="key">
                            </div>
                            <div class="form-group mb-24">
                                <a href="javascript:void(0);" class="forgot">Forgot Password?</a>
                            </div>
                            <div class="form-group mb-24">
                                <button type="submit" class="default-btn">Log In</button>
                            </div>
                            <div class="form-group mb-24 text-center">
                                <p class="account">Not A Member? <a href="javascript:void(0);">Create An Account</a></p>
                            </div>
                        </form>

                        <ul class="account-social-link">
                            <li>
                                <a href="https://www.google.com/" target="_blank">
                                    <i class='bx bxl-google'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Area -->
    <!-- Jquery Min JS -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
</body>

</html>