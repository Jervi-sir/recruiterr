<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:35:29 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        @yield('title')
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('redirectJs')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/icofont/icofont.min.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="dependencies/sal.js/sal.css">
    <link rel="stylesheet" href="dependencies/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="dependencies/select2/css/select2.min.css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
</head>

<body class="bg-link-water">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="appvue">
        <div id="wrapper" class="wrapper">
            <!-- Top Header -->
            @include('layouts.header')
            <!-- Sidebar Left -->
            @include('layouts.sidebarLeft')
            <!-- Sidebar Right -->
            @include('layouts.sidebarRight')

            <!-- Page Content -->
            <div class="page-content">
                <!--=====================================-->
                <!--=        Newsfeed  Area Start       =-->
                <!--=====================================-->
                @yield('content')
                <!--=====================================-->
                <!--=        Footer Area Start       	=-->
                <!--=====================================-->
                @include('layouts.footer')

            </div>
            <!-- Chat Modal Here -->
            @include('layouts.chatModal')
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="dependencies/jquery/js/jquery.min.js"></script>
    <script src="dependencies/popper.js/js/popper.min.js"></script>
    <script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
    <script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
    <script src="dependencies/slick-carousel/js/slick.min.js"></script>
    <script src="dependencies/sal.js/sal.js"></script>
    <script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="dependencies/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dependencies/select2/js/select2.min.js"></script>
    <script src="dependencies/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="dependencies/bootstrap-validator/js/validator.min.js"></script>

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    @yield('vuejs')


    @include('layouts.style')

    {!! Toastr::message() !!}

</body>
</html>
