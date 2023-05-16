@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/login-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')

{{-- <x-guest-layout> --}}
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="top">
    <div class="text">
        <div class="t-head">
            <h1 class="title">Login to <span style="color:#81D98F">your account</span></h1>
        </div>
    </div>
    <div class="form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="exclude rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-lg text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 no-underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="btn btn-success text-white">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
        <div>
            <a href="{{ url('/register') }}" class="nav-link" style="display: inline;">Don't have an account yet? CLICK HERE!</a>
        </div>
    {{-- </x-guest-layout> --}}
    </div>
</div>
@endsection
