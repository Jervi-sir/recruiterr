<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/cirkle/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 16:35:29 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maison d'entrepreneuriat</title>
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
    <div id="wrapper" class="wrapper">
        <!-- Top Header -->
        @include('home.header')
        <!-- Sidebar Left -->
        @include('home.sidebarLeft')
        <!-- Sidebar Right -->
        @include('home.sidebarRight')

        <!-- Page Content -->
        <div class="page-content">
            <!--=====================================-->
            <!--=        Newsfeed  Area Start       =-->
            <!--=====================================-->
            <div class="container">
                <!-- Banner Area Start -->
                <div class="newsfeed-banner">
                    <img src="media/banner/logo-words.png" alt="">
                </div>

                <div class="newsfeed-search">
                    <ul class="member-list">
                        <li class="active-member">
                            <a href="#">
                                <span class="member-icon">
                                    <i class="icofont-users"></i>
                                </span>
                                <span class="member-text">
                                    Total Members who joined us:
                                </span>
                                <span class="member-count">{{ $user_count }}</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="search-list">
                        <li class="search-input">
                            <button class="drop-btn" type="button">
                                <i class="icofont-search"></i>
                            </button>
                            <div class="drop-menu">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search....">
                                    <div class="input-group-append">
                                        <button class="search-btn" type="button"><i class="icofont-search-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class=" @auth col-lg-8 @endauth @guest col-lg-12 @endguest">
                        <div class="@guest row mx-0 justify-content-lg-between @endguest">
                            @foreach($articles as $article)
                            <div class="block-box post-view  @guest col-lg-65 @endguest ">
                                <div class="post-header">
                                    <div class="media">
                                        <h4 dir="rtl"  class="arabic">{{ mb_substr($article->title, 0, 100,'utf-8') }} ...</h4>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-img">
                                        <img src="{{ $article->images }}" alt="Post">
                                    </div>
                                </div>
                                <div class="post-footer">
                                    <ul>
                                        <li class="post-react">
                                            <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                            <ul class="react-list">
                                                <li><a href="#"><img src="media/figure/reaction_1.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_2.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_4.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_2.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_7.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_6.png" alt="Like"></a></li>
                                                <li><a href="#"><img src="media/figure/reaction_5.png" alt="Like"></a></li>
                                            </ul>
                                        </li>
                                        <li class="slide-button">
                                            <a href="{{ $article->link }}" target="_blank" class="button-slide">
                                                <span class="btn-text">Read more...</span>
                                                <span class="btn-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="10px">
                                                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M16.671,9.998 L12.997,9.998 L16.462,6.000 L5.000,6.000 L5.000,4.000 L16.462,4.000 L12.997,0.002 L16.671,0.002 L21.003,5.000 L16.671,9.998 ZM17.000,5.379 L17.328,5.000 L17.000,4.621 L17.000,5.379 ZM-0.000,4.000 L3.000,4.000 L3.000,6.000 L-0.000,6.000 L-0.000,4.000 Z" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <style>

                        </style>

                        <div class="block-box load-more-btn">
                            <a href="#" class="item-btn"><i class="icofont-refresh"></i>Load More Posts</a>
                        </div>
                    </div>
                    @auth
                    @include('home.userCard')
                    @endauth
                </div>
            </div>
            <!--=====================================-->
            <!--=        Footer Area Start       	=-->
            <!--=====================================-->
            @include('home.footer')

        </div>
        <!-- Chat Modal Here -->
        @include('home.chatModal')
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

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>

    <style>
        .col-lg-65 {
            flex: 0 0 48%;
            width: 48%;
        }
        .arabic {
            direction: rtl;
            display: flex;
            text-align: right;
        }
    </style>
    <style>
        .newsfeed-banner {
            display: flex;
            justify-content: center;
            background-image: linear-gradient(to left, #ffffff, #ffffff);
        }

        .newsfeed-banner img {
            width: 15rem;
        }
    </style>
     <style>
        .button-slide {
            padding: 0 !important;

        }

        .button-slide:hover .button-slide .btn-text {
            color: white !important;
        }

        .post-view .post-footer>ul {
            display: flex;
            align-items: center;
        }

        .slide-button {
            margin-right: auto;
        }
    </style>
</body>
</html>
