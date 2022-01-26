<div class="fixed-sidebar">
    <div class="fixed-sidebar-left small-sidebar">
        <div class="sidebar-toggle">
            <button class="toggle-btn toggler-open">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="sidebar-menu-wrap">
            <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                <ul class="side-menu">
                    <li><a href="{{ route('newsfeed') }}" class="menu-link" data-toggle="tooltip" data-placement="right" title="NEWSFEED"><i class="icofont-newspaper"></i></a></li>
                    <li><a href="{{ route('groups') }}" class="menu-link" data-toggle="tooltip" data-placement="right" title="GROUPS"><i class="icofont-users-alt-2"></i></a></li>
                    <li><a href="{{ route('courses') }}" class="menu-link" data-toggle="tooltip" data-placement="right" title="COURSES"><i class="icofont-play-alt-1"></i></a></li>
                    <li><a href="{{ route('events') }}" class="menu-link" data-toggle="tooltip" data-placement="right" title="EVENTS"><i class="icofont-calendar"></i></a></li>
                    <li><a href="{{ route('badges') }}" class="menu-link" data-toggle="tooltip" data-placement="right" title="BADGES"><i class="icofont-badge"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fixed-sidebar-left large-sidebar">
        <div class="sidebar-toggle">
            <div class="sidebar-logo">
                <a href="{{ route('home') }}"><img src="media/logo2.png" alt="Logo"></a>
            </div>
            <button class="toggle-btn toggler-close">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="sidebar-menu-wrap">
            <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                <ul class="side-menu">
                    <li><a href="{{ route('newsfeed') }}" class="menu-link"><i class="icofont-newspaper"></i><span class="menu-title">Newsfeed</span></a></li>
                    <li><a href="{{ route('groups') }}" class="menu-link"><i class="icofont-users-alt-2"></i><span class="menu-title">Groups</span></a></li>
                    <li><a href="{{ route('courses') }}" class="menu-link"><i class="icofont-play-alt-1"></i><span class="menu-title">Courses</span></a></li>
                    <li><a href="{{ route('events') }}" class="menu-link"><i class="icofont-calendar"></i><span class="menu-title">Events</span></a></li>
                    <li><a href="{{ route('badges') }}" class="menu-link"><i class="icofont-badge"></i><span class="menu-title">Badges</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
