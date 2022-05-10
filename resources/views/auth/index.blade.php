<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:36:10 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maison d'entrepreneuriat | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('redirectJs')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/icofont/icofont.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">

</head>

<body class="sticky-header">

    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper overflow-hidden">

        <!--=====================================-->
        <!--=          Header Menu Start       	=-->
        <!--=====================================-->
        <div class="login-page-wrap">
            <div class="content-wrap">
                <div class="login-content">
                    <div class="item-logo">
                        <a href="#"><img src="simplest/media/logo_words.svg" alt="logo"></a>
                    </div>
                    <div class="login-form-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ (request()->is('login')) ? 'javascript:void(0)' : route('login')  }}" aria-selected="true"><i class="icofont-users-alt-4"></i> Login </a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ (request()->is('register')) ? 'javascript:void(0)' : route('register')  }}" aria-selected="true"><i class="icofont-users-alt-4"></i> Registration </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="app">
                            @yield('auth-form')
                        </div>
                    </div>

                </div>
                <footer>
                    Copyright <a href="https://gacem.netlify.com" target="_blank">Jervi</a> from <a href="https://www.instagram.com/2kingswebsites/" target="_blank">2Kw.</a>
                </footer>
            </div>
        </div>

    </div>
    <!-- Jquery Js -->
    <script src="dependencies/jquery/js/jquery.min.js"></script>
    <script src="dependencies/sal.js/sal.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>

    <script>
        var formObj = document.getElementsByTagName('form')[0];
        var actionUrl = formObj.getAttribute('action');

        if(window.location.href.includes("http:")) {
            //document.getElementsByTagName('form')[0].setAttribute('action', 'http://me-uat.com/success');
            //6b67e9
        }

    </script>




    <style>
        .login-page-wrap .content-wrap {
            flex-direction: column;
            min-height: 100vh;
            justify-content: space-between;
        }
        .login-page-wrap .login-content {
            height: unset;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .login-page-wrap .nav-tabs li .nav-link {
            background-color: #6b67e9;
            color: #ffffff;
        }
        .login-page-wrap .nav-tabs li .nav-link i {
            color: #ffffff;
        }

        .login-page-wrap .nav-tabs li .nav-link.active {
            background-color: #ffffff;
            color: #6b67e9;
        }
        .login-page-wrap .nav-tabs li .nav-link.active i {
            color: #6b67e9;
        }

        .login-page-wrap .nav-tabs li .nav-link:hover {
            background-color: #6b67e9;
            color: #ffffff;
        }


        .error {
            color: brown;
            font-size: 13px;
        }

        .input-error {
            color: brown !important;
            border-bottom: 1px solid brown !important;
        }

        .toggle-psswd {
            cursor: pointer;
            position: absolute;
            top: 1rem;
            right: 0.5rem;
            background-color: transparent;
            border: none;
        }

        .about-us {
            max-width: 21rem;
            display: inline-block;
            padding: 1rem 0;
        }

        .images {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .images img {
            width: 50%;
        }

        h5 {
            margin-top: 3rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        footer {
            font-family: inherit;
            text-align: center;
            color: black;
        }

        footer a {
            color: black;
            opacity: 0.5;
        }

        .social {
            display: flex;
            justify-content: space-around;
        }

        .social li {
            font-size: 2rem;
        }

        .login-content {
            transform: translateX(-6%);
        }

        @media only screen and (max-width: 575px) {
            .login-page-wrap .item-logo a {
                width: 100%;
            }
            .login-content {
                transform: translateX(0%);
            }

        }

        </style>




@yield('styles-extra')
@yield('js-extra')


</body>

</html>
