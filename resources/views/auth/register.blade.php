@extends('layouts.auth_template')

@section('content')
    <div class="loginbox">
        <div class="login-right">
            <div class="login-right-wrap">
                <h1>Register</h1>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label" for="name">{{ ucfirst(__('body.name')) }}</label>
                        <input class="form-control" name="name" id="name" type="text"
                            value="{{ old('name') }}" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="email">{{ ucfirst(__('body.email')) }}</label>
                        <input class="form-control" type="email" id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="password">{{ ucfirst(__('body.password')) }}</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label"
                            for="password_confirmation">{{ ucfirst(__('body.confirm_passowrd')) }}</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="form-group mb-0">
                        <button class="btn btn-lg btn-block btn-primary w-100"
                            type="submit">{{ ucfirst(__('body.register')) }}</button>
                    </div>
                </form>
                <!-- /Form -->

                <!-- Social Login
                <div class="login-or">
                    <span class="or-line"></span>
                    <span class="span-or">or</span>
                </div>
                <div class="social-login">
                    <span>Register with</span>
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                </div>
                /Social Login -->
                <div class="text-center dont-have">{{ ucfirst(__('body.already_have_account_question')) }} <a
                        href="{{ route('login') }}">{{ ucfirst(__('body.login')) }}</a></div>
            </div>
        </div>
    </div>
@endsection
