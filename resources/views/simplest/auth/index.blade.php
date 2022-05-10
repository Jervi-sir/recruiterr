@extends('simplest.layouts.master')

@section('body')
<div class="form-container">
    <div class="tab">
        <div class="image-banner">
            <div class="void"></div>
            <div class="image">
                <img src="simplest/media/logo_words.svg" alt="logo">
            </div>
        </div>
        <div class="content-tab">
            <div class="menu-tab">
                <a href="{{ (request()->is('login')) ? 'javascript:void(0)' : route('login')  }}" class="{{ (request()->is('login')) ? 'active' : '' }}">
                    <span>
                        Login
                    </span>
                </a>
                <a href="{{ (request()->is('register')) ? 'javascript:void(0)' : route('register')  }}" class="{{ (request()->is('register')) ? 'active' : '' }}">
                    <span>
                        Register
                    </span>
                </a>
            </div>
            <div class="body-tab">
                @yield('form-body')
            </div>
        </div>
    </div>
    <footer>
        Copyright <a href="https://gacem.netlify.com" target="_blank">Jervi</a> from <a href="https://www.instagram.com/2kingswebsites/" target="_blank">2Kw.</a>
    </footer>
</div>
@endsection

@section('styles-head')
<style>
body {
    display: flex;
    padding: 0px !important;
    min-height: 100vh;
}
html {
    padding: 0;
}
.form-container {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: space-between;
    align-items: center
}
.tab {
    min-width: 470px;
    transform: translateX(-5%);
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

footer {
    color: black;
    font-weight: 600;
}

.image-banner {
    display: flex;
    width: 100%;
    margin-bottom: 20px;
}
.image-banner .void{
    display: block;
    width: 10%;
}
.image-banner .image{
    background: white;
    border-radius: 15px;
    text-align: center;
    padding: 10px 15px;
    width: 90%;
}

.content-tab {
    display: flex;
    width: 100%
}
.menu-tab {
    display: flex;
    writing-mode: vertical-lr;
}

.menu-tab a {
    transform: rotate(180deg);
    background: #615dfa;
    color: white;
    margin-bottom: 10px;
    padding: 25px 10px;
    border-radius: 12px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.menu-tab a.active {
    background: white;
    color: #3e416d;
}

.body-tab {
    background: white;
    border-radius: 12px;
    padding: 30px 50px;
    border-top-left-radius: 0;
    flex: 1;
}

button {
    margin-top: 10px !important;
    border-radius: 7px !important;
    background-color: #615dfa !important;
    font-weight: 600 !important;
}

button:hover {
    background-color: #4440be !important;
    color: white;
    transition: 0.2s;
}

.input {
    margin-bottom: 20px;
}

.line {
    content: "";
    height: 3px;
    width: 18px;
    background-color: #615dfa;
    margin-bottom: 30px;
    margin-left: 10px;
    border-radius: 10px;
}

footer a {
    text-decoration: none;
    font-weight: 400;
    color: rgb(36, 36, 36);
}


@media only screen and (max-width: 600px){
    .form-container {
        padding: 0 20px;
    }
    .image-banner .void{
        display: none;
    }
    .image-banner .image {
        padding: 20px 15px;
        width: 100%;
    }
    .tab {
        min-width: unset;
        width: 100%;
        transform: translateX(0);
    }
	.content-tab {
        display: flex;
        flex-direction: column;
    }
    .body-tab {
        border-top-right-radius: 0;
    }
    .menu-tab {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        writing-mode: unset;
    }
    .menu-tab a  {
        font-size: 20px;
        padding: 15px 10px;
        margin-bottom: 0;
        flex: 1;
        transform: rotate(0);
        text-align: center;
        border-radius: 20px 20px 0 0;
    }
}

</style>

@endsection
