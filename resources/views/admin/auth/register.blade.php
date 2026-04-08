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
                <x-admin::form-group :label="__('Name')" :error="$errors->first('name')">
                    <x-admin::input name="name" value="{{ old('name') }}" autocomplete="name" autofocus />
                </x-admin::form-group>

                <x-admin::form-group :label="__('Email Address')" :error="$errors->first('email')">
                    <x-admin::input type="email" name="email" value="{{ old('email') }}" autocomplete="email" />
                </x-admin::form-group>

                <x-admin::form-group :label="__('Password')" :error="$errors->first('password')">
                    <x-admin::input type="password" name="password" autocomplete="new-password" />
                </x-admin::form-group>

                <x-admin::form-group :label="__('Confirm Password')" :error="$errors->first('password_confirmation')">
                    <x-admin::input type="password" name="password_confirmation" autocomplete="new-password" />
                </x-admin::form-group>

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
