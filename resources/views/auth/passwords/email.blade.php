@extends('layouts.free')

@section('content')
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b">
                کلمه عبورتان را فراموش کرده اید؟
                <p class="text-xs m-t">آدرس ایمیل کاربری خود را در زیر وارد کنید تا اطلاعات تغییر کلمه عبور را برای شما ارسال نماییم.</p>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="md-form-group">
                    <input id="email" type="email" class="md-input" name="email" value="{{ old('email') }}" required>
                    <label>ایمیل</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">ارسال لینک ریست کلمه عبور</button>
            </form>
        </div>
        <p id="alerts-container"></p>
        <div class="p-v-lg text-center">بازگشت به صفحه <a href="/login" class="text-primary _600">ورود</a></div>
    </div>
@endsection
