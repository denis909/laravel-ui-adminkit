@extends('admin.layouts.auth')

@section('content')

    <div class="text-center mt-4">
        <h1 class="h2">{{ __('Welcome back!') }}</h1>
        <p class="lead">
            {{ __('Sign in to your account to continue') }}
        </p>
    </div>

    <div class="card">
        {{--
        <div class="card-header">{{ __('Login') }}</div>
        --}}
        <div class="card-body">
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <x-admin::input-group :label="__('Email Address')" :error="$errors->first('email')">
                    <x-admin::input type="email" name="email" value="{{ old('email') }}" autocomplete="email" />
                </x-admin::input-group>

                <x-admin::input-group :label="__('Password')" :error="$errors->first('password')">
                    <x-admin::input type="password" name="password" autocomplete="new-password" />
                </x-admin::input-group>

                <x-admin::input-group :labelOptions="['for' => 'remember-checkbox']" :label="__('Remember Me')" :error="$errors->first('remember')">
                    <input type="hidden" name="remember" value="" />
                    <x-admin::checkbox id="remember-checkbox" name="remember" value="{{ old('remember', 1) }}" />
                </x-admin::input-group>

                <x-admin::errors />

                <div class="row mb-0">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (Route::has('register'))
        <div class="text-center mb-3">
            {{ __('Don\'t have an account?') }} <a href="{{ route('register') }}">{{ __('Sign up') }}</a>
        </div>
    @endif
@endsection
