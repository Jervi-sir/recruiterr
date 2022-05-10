<div class="head_user">

    @auth
    @include('simplest.components.headerUser.add')

    <!-- Message  notificiation dropdown -->

    <!-- notificiation icon  -->
    @include('simplest.components.headerUser.notification')

    <!-- profile -image -->
    @include('simplest.components.headerUser.profile')
    @else
    <a href="{{ route('login') }}" class="uk-button uk-button-primary quick-login">Login</a>
    <style>
        .quick-login {
            border-radius: 10px;
            background-color: #4a46fb;
        }
    </style>
    @endauth



</div>
