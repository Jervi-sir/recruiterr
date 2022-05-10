@extends('simplest.auth.index')

@section('title')
Register
@endsection

@section('form-body')
<h2>Join our Community</h2>
<div class="line"></div>
<form id="form" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="input">
        <input class="uk-input" type="text" name="email" placeholder="Your E-mail">
    </div>
    <div class="input">
        <input class="uk-input" type="password" name="password" placeholder="Password">
    </div>

    <div class="input uk-input phone-container">
        <label for="">
            <img src="../media/algeria_flag.svg" alt="" width="20px">
            <span>+213</span>
        </label>
        <input class="phone-number" name="phone" v-model="phone"  type="text" minlength="8" maxlength="10"  placeholder="Phone number" @keypress="isNumber($event)" required/>
    </div>

    <div class="input">
        <select class="uk-select" name="speciality">
            <option selected hidden disabled>Speciality</option>
            <option v-for="(speciality, index) in specialities" :key="index" :value="speciality.id">
                @{{speciality.name}}
            </option>
        </select>
    </div>
    <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom"> Login </button>
</form>
@endsection

@section('styles-footer')
<style>
    .phone-container {
        display: flex;
    }
    .phone-container label {
        line-height: unset;
        display: flex;
        align-items: center;
    }
    .phone-number {
        background: white;
        flex: 1;
        border: none;
        outline: none;
        padding-left: 5px;
        font-family: inherit;
        font-weight: 500
    }

</style>

@endsection


@section('js-footer')

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#form',
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
