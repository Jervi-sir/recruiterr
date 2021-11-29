<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:36:10 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cirkle | Login</title>
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
    <link rel="stylesheet" href="dependencies/sal.js/sal.css" type="text/css">
    <link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">

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
                        <a href="#"><img src="media/banner/logo-words.png" alt="logo"></a>
                    </div>
                    <div class="login-form-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}" aria-selected="true"><i class="icofont-users-alt-4"></i> Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('register') }}"  aria-selected="false"><i class="icofont-download"></i> Registration</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel">
                                <h3 class="item-title">Sign Into <span>Your Account</span></h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Your E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group reset-password">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input name="remember"  type="checkbox" class="form-check-input" id="validationFormCheck2">
                                            <label class="form-check-label" for="validationFormCheck2">Keep me as signed in</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login-btn" class="submit-btn" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=      Header Search Start          =-->
        <!--=====================================-->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Search here..." />
                <button type="submit" class="search-btn">
                    <i class="flaticon-search"></i>
                </button>
            </form>
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
    <script src="dependencies/bootstrap-validator/js/validator.min.js"></script>
    <script src="dependencies/select2/js/select2.min.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>


<script>
    var formObj = document.getElementsByTagName('form')[0];
    var actionUrl = formObj.getAttribute('action');

    if(window.location.href.includes("http:")) {
        //document.getElementsByTagName('form')[0].setAttribute('action', 'http://me-uat.com/success');
    }

</script>
    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                phone: '',
            },
            methods: {
                isNumber: function(event) {
                    event = (event) ? event : window.event;
                    var charCode = (event.which) ? event.which : event.keyCode;
                    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                        event.preventDefault();;
                    } else {
                        return true;
                    }

                }
            }
        })

    </script>

    <!-- Last minute fixes -->
    <style>
        .phone {
                margin-top: 0.5rem;
                display: flex;
                align-content: center;
                align-items: center;
                gap: 1rem;
                border: none;
                border-radius: 0;
                padding: 5px 0;
                padding: 0;
                border-bottom: 1px solid #eaeaea;
            }

            .phone label {
                display: flex;
                align-content: center;
                align-items: center;
                margin: 0;

            }

            .phone input {
                border: none;
                outline: none;
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
            position: fixed;
            bottom: 0.5rem;
            left: 0;
            right: 0;
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

        @media only screen and (max-width: 575px) {
            .login-page-wrap .item-logo a {
                width: 100%;
            }
        }

    </style>
    <script>
        function toggle(mode) {
            var psswdStatus = mode.classList.contains('icofont-eye-alt');
            var psswdContainer = document.getElementById('password');
            if (psswdStatus) {
                psswdContainer.type = "text";
                mode.classList.remove("icofont-eye-alt");
                mode.classList.add("icofont-eye-blocked");

            } else {
                psswdContainer.type = "password";
                mode.classList.remove("icofont-eye-blocked");
                mode.classList.add("icofont-eye-alt");
            }
        }

        function setHeight() {
            var body = document.body,
                html = document.documentElement;

            var height = Math.max(body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight);

            document.getElementsByTagName('body')[0].style.height = height + "px";
            console.log(height);
        }
    </script>

</body>

<!-- Mirrored from radiustheme.com/demo/html/cirkle/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:36:11 GMT -->

</html>
