@extends('admin.layouts.auth', ['title' => __('Reset Password')])

@section('content')

    <div class="card">
        {{--
        <div class="card-header">{{ __('Reset Password') }}</div>
        --}}
        <div class="card-body">

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <x-form-input-group :label="__('Email Address')" :error="$errors->first('email')">
                    <x-input-text type="email" name="email" value="{{ old('email') }}" autocomplete="email" />
                </x-form-input-group>

                <x-errors />

                <div class="row mb-0">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
