@extends('layouts.free')

@section('content')
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                @include('partials.brand')
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">با کاربری شاهین بال خود وارد شوید
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="md-form-group float-label">
                    <input id="email" type="email" class="md-input" name="email" value="{{ old('email') }}" required autofocus>
                    <label>ایمیل</label>
                </div>
                <div class="md-form-group float-label">
                    <input id="password" type="password" class="md-input" name="password" required>
                    <label>کلمه عبور</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> یادآوری
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">ورود</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div class="m-b"><a href="{{ route('password.request') }}" class="text-primary _600">کلمه عبورتان را فراموش کرده اید؟</a></div>
            <div>آیا قبلا عضو شاهین بال نبوده اید؟ <a href="/register" class="text-primary _600">عضویت</a></div>
        </div>
    </div>
@endsection
