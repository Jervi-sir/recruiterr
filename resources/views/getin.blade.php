<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maison d'entrepreneuriat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('redirectJs')
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/logo.png">
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/icofont/icofont.min.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="dependencies/sal.js/sal.css" type="text/css">
    <link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body class="sticky-header">
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper overflow-hidden">
        <div class="login-page-wrap">
            <div class="content-wrap">
                <div class="login-content">
                    <div class="item-logo">
                        <a href="#"><img src="media/banner/logo-words.png" alt="logo"></a>
                    </div>
                    <div class="login-form-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab" aria-selected="true"><i class="icofont-download"></i> Registration </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#registration-tab" role="tab" aria-selected="false"><i class="icofont-info-circle"></i> About us</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="app">
                            <form class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel" action="{{ route('register') }}" method="POST">
                                @csrf
                                <h3 class="item-title">Sign Into <span>our community</span></h3>
                                <div name="contact">
                                    <div class="form-group">
                                        <input name="name" value="{{ old('name') }}" type="text" class="form-control "  placeholder="Your Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input name="email" value="{{ old('email') }}" type="email" class="form-control {{ $errors->has('email') != NULL ? ' input-error' : '' }}" placeholder="E-mail" required/>
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <li>{{$errors->first('email')}}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input name="password" id="password" type="password" class="form-control {{ $errors->has('password') != NULL ? ' input-error' : '' }}" placeholder="Password" required/>
                                        <button onclick="toggle(this)" type="button" class="toggle-psswd icofont-eye-alt"></button>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{{$errors->first('password')}}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="phone">
                                            <label for="">
                                                <img src="../media/algeria_flag.svg" alt="" width="20px">
                                                <span>+213</span>
                                            </label>
                                            <input name="phone" v-model="phone"  value="{{ old('phone') }}" type="text" minlength="8" maxlength="10" class="form-control {{ $errors->has('phone') != NULL ? ' input-error' : '' }}" placeholder="Phone number" @keypress="isNumber($event)" required/>
                                        </div>
                                        @if ($errors->has('phone'))
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <li>{{$errors->first('phone')}}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input name="code" value="{{ old('code') }}" type="text" class="form-control" placeholder="Your Student Code" required/>
                                    </div>
                                    <div class="form-group">
                                        <input name="field" value="{{ old('field') }}" type="text" class="form-control" placeholder="Speciality Field" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login-btn" class="submit-btn" value="Join">
                                    </div>
                                </div>
                            </form>
                            <div class="tab-pane registration-tab fade" id="registration-tab" role="tabpanel">
                                <h3 class="item-title">About us</h3>
                                <div class="images">
                                    <img src="media/banner/Logo.png" alt="">
                                </div>
                                <span class="about-us">
                                    we are a student opportunities space, we help ambitious people to reach their dreams
                                </span>
                                <h5>Follow us </h5>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/%D8%AF%D8%A7%D8%B1-%D8%A7%D9%84%D9%85%D9%82%D8%A7%D9%88%D9%84%D8%AA%D9%8A%D8%A9-%D8%AC%D8%A7%D9%85%D8%B9%D8%A9-%D8%B9%D9%8A%D9%86-%D8%AA%D9%85%D9%88%D8%B4%D9%86%D8%AA-105911321310305/"
                                            target="_blank"><i class="icofont-facebook"></i></a></li>
                                    <li><i class="icofont-instagram"></i></li>
                                    <li><i class="icofont-ui-email"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <footer>
                        Copyright <a href="https://gacem.netlify.com" target="_blank">Jervi</a> from <a href="https://www.instagram.com/2kingswebsites/" target="_blank">2Kw.</a>
                    </footer>
                </div>
            </div>
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

<script>
    var formObj = document.getElementsByTagName('form')[0];
    var actionUrl = formObj.getAttribute('action');

    if(window.location.href.includes("http:")) {
        //document.getElementsByTagName('form')[0].setAttribute('action', 'http://me-uat.com/register');
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

</html>
