<header class="fixed-header">
    <div class="header-menu">
        <div class="navbar">
            <div class="nav-item nav-top-menu">
                <nav id="dropdown" class="template-main-menu">
                    <ul class="menu-content">
                        <li class="header-nav-item">
                            <a href="index-2.html" class="menu-link active">Home</a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#" class="menu-link have-sub">Community</a>
                            <ul class="mega-menu mega-menu-col-2">
                                <li>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">NewsFeed</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile Timeline</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile About</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile Friends</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile Group</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile Photo</a>
                                        </li>
                                        <li>
                                            <a href="#">Profile Video</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Profile Badges</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums Topic</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums Timeline</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums Info</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums Members</a>
                                        </li>
                                        <li>
                                            <a href="#">Forums Media</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="nav-item header-control">
                @auth
                <div class="inline-item d-flex align-items-center">
                    <div class="dropdown dropdown-notification">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="icofont-notification"></i><span class="notify-count">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-heading">
                                <h6 class="heading-title">Notifications</h6>
                                <div class="heading-btn">
                                    <a href="#">Settings</a>
                                    <a href="#">Mark all as Read</a>
                                </div>
                            </div>
                            <div class="item-body">
                                <a href="#" class="media">
                                    <div class="item-img">
                                        <img src="media/figure/chat_1.jpg" alt="Notify">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="item-title">Name </h6>
                                        <div class="item-time">15 mins ago</div>
                                        <p>Business online Course avail...</p>
                                    </div>
                                </a>

                            </div>
                            <div class="item-footer">
                                <a href="#" class="view-btn">View All Notification</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inline-item">
                    <div class="dropdown dropdown-admin">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="media">
                                <span class="item-img">
                                    <img src="media/figure/chat_1.jpg" alt="Chat">
                                    <span class="acc-verified"><i class="icofont-check"></i></span>
                                </span>
                                <span class="media-body">
                                    <span class="item-title">{{ explode(' ', Auth()->user()->name)[0] }}</span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="admin-options">
                                <li><a href="#">Profile Settings</a></li>
                                <li><a href="#">Groups</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Contact</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">{{ __('Log Out') }}</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endauth
                @guest
                <div class="log-logout-btn ">
                    <div class="logs">
                        <a href="{{ route('register') }}" class="item-btn">Join us</a>
                    </div>
                    <div class="logs">
                        <a href="{{ route('login') }}" class="item-btn">Login</a>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </div>
</header>

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
</style>