@extends('auth.index')

@section('auth-form')
<div class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel">
    <h3 class="item-title">Login</span></h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Your E-mail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <!--
        <div class="form-group reset-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
            @endif
        </div>
        -->
        <div class="form-group mb-4">
            <div class="form-check">
                <input name="remember" checked hidden  type="checkbox" class="form-check-input" id="validationFormCheck2">
            </div>
        </div>
        @if ($errors->has('email'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{$errors->first('email')}}</li>
                </ul>
            </div>
        @endif
        <div class="form-group">
            <input type="submit" name="login-btn" class="submit-btn" value="Login">
        </div>
    </form>
</div>
@endsection



@section('styles-extra')

@endsection




@section('js-extra')
<script src="assets/js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            phone: '',
        },
        methods: {
            isNumber: function(event) {
                event = (event) ? event : window.event;
                var charCode = (event.which) ? event.which : event.keyCode;
                if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                    event.preventDefault();;
                } else {
                    return true;
                }

            }
        }
    })

</script>
@endsection
