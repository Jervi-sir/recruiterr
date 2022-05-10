@extends('auth.index')

@section('auth-form')
<div class="tab-pane registration-tab fade show active" id="registration-tab" role="tabpanel">
    <form class="tab-pane login-tab fade show active" id="login-tab" role="tabpanel" action="{{ route('register') }}" method="POST">
        @csrf
        <h3 class="item-title">Join our Community</span></h3>
        <div name="contact">
            <div class="form-group">
                <input name="name" value="{{ old('name') }}" type="text" class="form-control "  placeholder="Your Name" required/>
            </div>
            <div class="form-group">
                <input name="email" value="{{ old('email') }}" type="email" class="form-control {{ $errors->has('email') != NULL ? ' input-error' : '' }}" placeholder="E-mail" required/>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{$errors->first('email')}}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <input name="password" id="password" type="password" class="form-control {{ $errors->has('password') != NULL ? ' input-error' : '' }}" placeholder="Password" required/>
            </div>
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{$errors->first('password')}}</li>
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <div class="phone">
                    <label for="">
                        <img src="../media/algeria_flag.svg" alt="" width="20px">
                        <span>+213</span>
                    </label>
                    <input name="phone" v-model="phone"  value="{{ old('phone') }}" type="text" minlength="8" maxlength="10" class="form-control {{ $errors->has('phone') != NULL ? ' input-error' : '' }}" placeholder="Phone number" @keypress="isNumber($event)" required/>
                </div>
                @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{$errors->first('phone')}}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <select name="field" class="form-control" >
                    <option selected hidden disabled class="first-option">Select your Speciality</option>
                    <option v-for="(speciality, index) in specialities" :key="index" :value="speciality.id">
                        @{{speciality.name}}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="login-btn" class="submit-btn" value="Join">
            </div>
        </div>
    </form>
</div>
@endsection


@section('styles-extra')
<style>

.phone {
    margin-top: 0.5rem;
    display: flex;
    align-content: center;
    align-items: center;
    border: none;
    border-radius: 0;
    padding: 5px 0;
    padding: 0;
    border-bottom: 1px solid #eaeaea;
}

.phone label {
    display: flex;
    align-content: center;
    align-items: center;
    margin: 0;
    margin-right: 1rem;

}

.phone input {
    border: none;
    outline: none;
}

.phone .form-control {
    width: unset;
    flex: 1;
}
</style>
@endsection


@section('js-extra')
<script src="assets/js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            phone: '',
            specialities: [
                {'id': 1, 'name':'bruh'},
                {'id': 2, 'name':'bruh1'},
                {'id': 3, 'name':'bruh2'},
                {'id': 4, 'name':'bruh3'},
            ],
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

