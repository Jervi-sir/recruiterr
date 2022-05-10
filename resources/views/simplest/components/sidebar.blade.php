<div class="main_sidebar">
    <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>

    <!-- sidebar header -->
    <div class="sidebar-header">
        <!-- Logo-->
        <div id="logo">
            <a href="{{ route('home') }}"> <img src="simplest/media/logo_words.svg" alt=""></a>
        </div>
        <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
    </div>

    <style>
        #logo {
            background: white;
            border-radius: 15px;
            padding: 10px 15px;
            width: 70%;
            text-align: center;
        }
        #logo.phone {
            background: white;
            border-radius: 15px;
            text-align: left;
        }
        .main_sidebar .sidebar-header #logo img {
            padding: 0;
        }
    </style>

    <!-- sidebar Menu -->
    <div class="sidebar">
        <div class="sidebar_innr" data-simplebar>

            <div class="sections">
                <ul>
                    <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    @auth
                    @if(Auth()->user()->role->role_name == 'su' || Auth()->user()->role_name == 'admin')
                    <li class="{{ (request()->is('create-article')) ? 'active' : '' }}">
                        <a href="{{ route('article.create') }}">
                            Create Post
                        </a>
                    </li>
                    @endif
                    @endauth

                    <li>
                        <a href="popular-post.html">
                            Groups
                        </a>
                    </li>
                    <li>
                        <a href="events.html">
                            Formations
                        </a>
                    </li>

                    <li>
                        <a href="offers.html">
                            Offers
                        </a>
                    </li>
                    <li>
                        <a href="explore.html">
                            Explore
                        </a>
                    </li>
                    <li >
                        <a href="jobs.html">
                            Jobs
                        </a>
                    </li>
                    <li id="more-veiw" hidden="">
                        <a href="funding.html">
                            Fundings
                        </a>
                    </li>
                </ul>
                <a href="#" class="button secondary px-5 btn-more" uk-toggle="target: #more-veiw; animation: uk-animation-fade">
                    <span id="more-veiw">See More <i class="icon-feather-chevron-down ml-2"></i></span>
                    <span id="more-veiw" hidden>See Less<i class="icon-feather-chevron-up ml-2"></i> </span>
                </a>
            </div>

            <div class="sections">
                <h3> Explore </h3>
                <ul>
                    <li>
                        <a href="group.html">
                            Groups
                        </a>
                    </li>
                    <li>
                        <a href="pages.html">
                            Pages
                        </a>
                    </li>
                    <li>
                        <a href="market.html">
                            Market
                        </a>
                    </li>
                    <li>
                        <a href="blog.html">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="jobs.html">
                            Jobs
                        </a>
                    </li>

                </ul>

            </div>

            <!--  Optional Footer -->
            <div id="foot">

                <ul>
                    <li> <a href="page-term.html"> About Us </a></li>
                    <li> <a href="page-setting.html"> Setting </a></li>
                    <li> <a href="page-privacy.html"> Privacy Policy </a></li>
                    <li> <a href="page-term.html"> Terms - Conditions </a></li>
                </ul>


                <div class="foot-content">
                    <p>© 2020 <strong>Simplest</strong>. All Rights Reserved. </p>
                </div>

            </div>



        </div>


    </div>

</div>
