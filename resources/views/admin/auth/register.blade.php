@extends('admin.layouts.auth')

@section('content')

    <div class="text-center mt-4">
        <h1 class="h2">{{ __('Get started') }}</h1>
        <p class="lead">
            {{ __('Start creating the best possible user experience for you customers.') }}
        </p>
    </div>

    <div class="card">
        {{--
        <div class="card-header">{{ __('Register') }}</div>
        --}}
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <x-form-input-group :label="__('Name')" :error="$errors->first('name')">
                    <x-input-text name="name" value="{{ old('name') }}" autocomplete="name" autofocus />
                </x-form-input-group>

                <x-form-input-group :label="__('Email Address')" :error="$errors->first('email')">
                    <x-input-text type="email" name="email" value="{{ old('email') }}" autocomplete="email" />
                </x-form-input-group>

                <x-form-input-group :label="__('Password')" :error="$errors->first('password')">
                    <x-input-text type="password" name="password" autocomplete="new-password" />
                </x-form-input-group>

                <x-form-input-group :label="__('Confirm Password')" :error="$errors->first('password_confirmation')">
                    <x-input-text type="password" name="password_confirmation" autocomplete="new-password" />
                </x-form-input-group>

                <x-errors />

                <div class="row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mb-3">
        {{ __('Already have account?') }} <a href="{{ route('login') }}">{{ __('Log In') }}</a>
    </div>

@endsection
