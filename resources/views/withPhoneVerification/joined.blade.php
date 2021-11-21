<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:36:10 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maison de l'entrepreneuriat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <div class="item-logo success-logo">
                        <a href="#"><img src="media/banner/logo-words.png" alt="logo"></a>
                    </div>
                    <div class="login-form-wrap success-msg ">
                        <div class="tab-content">
                            <div class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel">
                                <h3 class="item-title">Thank you for registering !</h3>
                                <br>
                                <!--<a id="back-link" href="#">← Back to our site</a>-->
                                <div class="actions">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button id="back-link" type="submit">← Log Out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        Copyright <a href="https://gacem.netlify.com" target="_blank">Jervi</a> from <a href="https://www.instagram.com/2kingswebsites/" target="_blank">2Kw.</a>
                    </footer>
                </div>
            </div>
        </div>

        <script>
            var url = window.location.origin;
            document.getElementById('back-link').href = url;
        </script>

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
            form #back-link {
                background: transparent;
                color: #0b7f0a;
                font-weight: 600;
                padding: 0;
            }

            form #back-link:hover {
                color: black;
                transition: 0.5s;
            }

            .phone {
                margin-top: 0.5rem;
                display: flex;
                align-content: center;
                align-items: center;
                gap: 0.5rem;
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

            .actions {
                margin-top: 2rem;
                display: flex;
                justify-content: space-between;
            }

            .actions a {
                margin: 0;
            }

            .actions button {
                border: none;
                background: #10810f;
                color: white;
                border-radius: 5px;
                padding: 2px 1.5rem;
            }

            .actions button:disabled {
                background: #043303;
            }
        </style>
        <style>
            .success-msg {
                margin-top: 5rem;
                width: 100%;
            }

            .about-us {
                max-width: 22rem;
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

            .login-page-wrap .tab-content .item-title {
                margin-bottom: 1rem;
            }

            .login-page-wrap .tab-content {
                padding: 30px 60px;
            }

            .login-page-wrap .item-logo a {
                width: 100%;
            }

            .login-page-wrap .login-form-wrap {
                padding: 0;
                border-radius: 15px;
            }

            .login-page-wrap .tab-content {
                border-radius: 15px;
            }

            a {
                /*color: #615dfa;*/
                color: #0b7f0a;
                margin-top: 0.5rem;
                font-weight: 600;
            }

            @media only screen and (max-width: 575px) {
                .login-page-wrap .item-logo a {
                    width: 100%;
                }
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
