@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/login-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
<div class="top">
    <div class="text">
        <div class="t-head">
            <h1 class="title">Login to <span style="color:#81D98F">your account</span></h1>
        </div>
    </div>
    <div class="form">
        <form action="" id="loginForm">
            <div>
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>   
            </div>
            <div>
                <button type="submit" class="btn btn-success">Login</button>
            </div>
            <div>
                <a href="{{ url('/register') }}" class="nav-link">Don't have an account yet? CLICK HERE!</a>
            </div>
        </form>
    </div>
</div>
@endsection