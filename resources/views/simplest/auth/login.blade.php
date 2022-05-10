@extends('simplest.auth.index')

@section('title')
Login
@endsection

@section('form-body')
<h1>Login</h1>
<div class="line"></div>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="input">
        <input class="uk-input" type="text" name="email" placeholder="Your E-mail">
    </div>
    <div class="input">
        <input class="uk-input" type="password" name="password" placeholder="Password">
    </div>
    <div class="input">
        <div class="form-check">
            <input name="remember" checked hidden  type="checkbox" class="form-check-input" id="validationFormCheck2">
        </div>
    </div>
    <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"> Login </button>
</form>
@endsection
