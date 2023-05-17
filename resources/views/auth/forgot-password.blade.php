@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/login-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')

{{-- <x-guest-layout> --}}
    <div class="top">
        <div class="text">
            <div class="t-head">
                <h1 class="title">Forgot <span style="color:#81D98F">your password?</span></h1>
            </div>
        </div>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Send your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <div class="form">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="btn btn-success text-white">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

{{-- </x-guest-layout> --}}
@endsection
