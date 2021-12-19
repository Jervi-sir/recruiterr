<!-- header -->
<style>
    .log-logout-btn {
        display: flex;
    }

    .log-logout-btn .logs a {
        text-align: center;
        display: block;
        font-size: 14px;
        font-weight: 700;
        color: #221f97;
        border-radius: 3px;
        background-color: #ffffff;
        padding: 3px 20px;
        margin-right: 2rem;
    }


    @media only screen and (max-width: 1199px) {
        .fixed-header .navbar {
            padding: 19px 15px;
            height: 89px;
        }
    }


    @media only screen and (max-width: 991px) {
        .fixed-header .navbar {
            padding: 7px 10px;
            height: 60px;
        }

    }


    @media only screen and (max-width: 767px) {
        .fixed-header .navbar {
            padding: 2px 10px;
            height: 50px;
        }

    }


    @media only screen and (min-width: 577px) {
        .fixed-header .header-control {
            margin-left: auto;
        }
    }

    @media only screen and (max-width: 575px) {
        .log-logout-btn .logs a {
            margin-right:0;
        }
        .log-logout-btn .logs a:first-of-type {
            margin-right:10px;
            margin-left:0;
        }

        .log-logout-btn .logs a:first-of-type {
            margin-left:10px;
        }

    }


</style>

<!-- global -->
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

    .newsfeed-banner {
        display: flex;
        justify-content: center;
        background-image: linear-gradient(to left, #ffffff, #ffffff);
    }

    .newsfeed-banner img {
        width: 15rem;
    }

    .button-slide {
        padding: 5px !important;

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

    @media (max-width: 991px) {
        .col-lg-65 {
            flex: 0 0 100%;
            width: 100%;
        }
        .footer-dashboard .main-footer {
            text-align: center
        }
        .justify-content-lg-center {
            justify-content: center;
        }
    }

</style>
