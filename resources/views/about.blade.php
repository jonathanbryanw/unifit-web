@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/about-style.css')}}">
@endsection

@section('js')

@endsection



@section('content')
<h3 class="header"></h3>
<div class="top">
    <div class="c-text">
        <div class="t-head">
            <h1 class="c-title">Get To Know<span style="color:#81D98F"> About Us</span></h1>
            <p class="subtext">
                Our goal at UniFit is to empower people on their fitness journey by offering a centralized platform that integrates exercise routines, food advice, links to trainers, and interactive features. With the help of a team of committed professionals, we work to provide a welcoming community where users can access tailored resources and qualified advice, empowering them to realize their full potential, achieve their health and fitness objectives, and live happier, more fulfilling lives.            </p>
        </div>
        <div class="img-top">
            <img src="{{asset('images/about-01.png')}}" alt="">
        </div>
    </div>   
</div> 



@endsection