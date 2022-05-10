<a class="opts_account" href="#"> <img src="simplest/images/avatars/avatar-2.jpg" alt=""></a>

    <!-- profile dropdown-->
    <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
        class="dropdown-notifications rounded display-hidden">

        <!-- User Name / Avatar -->
        @auth
        <a href="timeline.html">
            <div class="dropdown-user-details">
                <div class="dropdown-user-cover">
                    <img src="simplest/images/avatars/profile-cover.jpg" alt="">
                </div>
                <div class="dropdown-user-avatar">
                    <img src="simplest/images/avatars/avatar-1.jpg" alt="">
                </div>
                <div class="dropdown-user-name"> James Lewis </div>
            </div>
        </a>
        @endauth

        @guest
        <ul class="dropdown-user-menu">
            <li><a href="{{ route('login') }}"> <i class="fas fa-user-cog"></i> Login</a></li>
            <li><a href="{{ route('register') }}"> <i class="fas fa-user-cog"></i> Register</a></li>
        </ul>
        @endguest

        @auth
        <ul class="dropdown-user-menu">
            <li><a href="#"> <i class="fas fa-user-cog"></i> Create Post</a></li>
            <li><a href="#"> <i class="fas fa-user-cog"></i> Edit Profile</a></li>
            <hr class="m-0">
            <li><a href="{{ route('article.create') }}"> <i class="fas fa-user-cog"></i> Create Post</a></li>
            <li><a href="#"> <i class="fas fa-user-cog"></i> Admin Area</a></li>
            <li>
                <a href="#" id="night-mode" class="btn-night-mode">
                    <i class="fas fa-moon"></i> Night mode
                    <span class="btn-night-mode-switch">
                        <span class="uk-switch-button"></span>
                    </span>
                </a>
            </li>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="padding:0; border: none; background: transparent; font-weight: 600; font-size: 15.3px;" class="uk-link"> {{ __('Log Out') }}</button>
                    </form>
                </a>
            </li>
        </ul>
        <hr class="m-0">
        @endauth


    </div>
