@extends('layouts.auth_template')

@section('content')
    <div class="loginbox">

        <div class="login-right">
            <div class="login-right-wrap">
                <h1>{{ ucfirst(__('body.login')) }}</h1>
                <p class="account-subtitle">{{ ucfirst(__('body.login_title')) }}</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label" for="email">{{ ucfirst(__('body.email_address')) }}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('login') }}"
                            autofocus>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="password">{{ ucfirst(__('body.password')) }}</label>
                        <div class="pass-group">
                            <input type="password" class="form-control pass-input" id="password" name="password">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">
                                        {{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="col-6 text-end">
                                    <a class="forgot-link"
                                        href="{{ route('password.request') }}">{{ ucfirst(__('body.forgot_password_question')) }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-lg btn-block btn-primary w-100"
                        type="submit">{{ ucfirst(__('body.login')) }}</button>

                    <!-- Social Login
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="social-login mb-3">
                            <span>Login with</span>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        /Social Login -->

                    @if (Route::has('register'))
                        <div class="text-center dont-have">{{ ucfirst(__('body.don_t_have_account_yet_question')) }} <a
                                href="{{ route('register') }}">{{ ucfirst(__('body.register')) }}</a></div>
                    @endif
                </form>

            </div>
        </div>
    </div>
@endsection
