@extends('layouts.free')
@section('content')
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                @include('partials.brand')
            </div>
        </div>

        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                کاربری خود را ایجاد کنید.
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="md-form-group">
                    <input type="text" class="md-input" name="name" value="{{ old('name') }}" required>
                    <label>نام</label>
                </div>
                <div class="md-form-group">
                    <input type="email" class="md-input" name="email" value="{{ old('email') }}" required>
                    <label>ایمیل</label>
                </div>
                <div class="md-form-group">
                    <input type="password" class="md-input" class="form-control" name="password" required>
                    <label>کلمه عبور</label>
                </div>
                <div class="md-form-group">
                    <input type="password" class="md-input" class="form-control" name="password_confirmation"required>
                    <label>تایید کلمه عبور</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox" required><i class="primary"></i> موافقت با <a href>شرایط خدمات</a>
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">عضویت</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div>آیا قبلا عضو شده بودید؟ <a href="login" class="text-primary _600">ورود</a></div>
        </div>
    </div>
@endsection
