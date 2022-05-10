<div id="main_header">
    <header>
        <div class="header-innr">

            <!-- Logo-->
            <div class="header-btn-traiger is-hidden" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible">
                <span></span></div>

                <!-- Logo-->
                <div id="logo" class="phone">
                    <a href="{{ route('home') }}"> <img src="simplest/media/logo_words.svg" alt=""></a>
                    <a href="{{ route('home') }}"> <img src="simplest/media/logo_words.svg" class="logo-inverse" alt="">
                    </a>
                </div>

            <!-- form search-->
            @include('simplest.components.formSearch')
            <!-- user icons -->
            @include('simplest.components.headerUser.index')

        </div> <!-- / heaader-innr -->
    </header>

</div>
