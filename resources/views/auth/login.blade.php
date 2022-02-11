@extends('layouts.app')

@section('content')

    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <img src="{{  asset('assets/images/logo-banner.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="login-reg-bg">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="mtrl-select @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label class="control-label" for="input">{{ __('Email Address') }}</label><i
                                        class="mtrl-select"></i>
                                    @error('email')
                                        <small class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="mtrl-select @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="current-password">
                                    <label class="control-label" for="input">{{ __('Password') }}</label><i
                                        class="mtrl-select"></i>
                                    @error('password')
                                        <small class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>

                                <div class="d-flex">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" checked="checked" /><i
                                                class="check-box"></i>{{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="forgot-pwd" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="submit-btns">
                                    <button class="mtr-btn signin" type="submit"><span>login</span></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
