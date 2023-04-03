@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/home-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/slider-script.js')}}"></script>
@endsection

@section('content')
<div class="top">
    <div class="slider-out">
        <div class="slider-in">
            <img src="{{asset('images/slider-1.png')}}" alt="" class="active" id="1">
            <img src="{{asset('images/pancing.png')}}" alt="" id="2">
            <img src="{{asset('images/ajak.jpg')}}" alt="" id="3">
        </div>
        <div class="slider-dot">
            <div class="dot active-dot" onclick="dotSwitch(1)"></div>
            <div class="dot" onclick="dotSwitch(2)"></div>
            <div class="dot" onclick="dotSwitch(3)"></div>
        </div>
        <div class="left"><i class="bi bi-arrow-left" style="font-size: 6rem; color:#81D98F;"></i></div>
        <div class="right"><i class="bi bi-arrow-right" style="font-size: 6rem; color:#81D98F;"></i></div>
        <div class="header">
            <p class="header-top">
                Get Your <span style="color:#81D98F">Perfect Workout</span><br>
                Connect With <span style="color:#81D98F">Perfect Trainers</span><br>
                Follow Best <span style="color:#81D98F">Diet Program</span>
            </p>
        </div>
    </div>
</div>
<div class="middle">
    <div class="section-1">
        <div class="text">
            <div class="t-head">
                <h1 class="title">What is <span style="color:#81D98F">UniFit?</span></h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id officia veritatis.<br> Nostrum ratione tempore rem, soluta voluptate odio quo nisi delectus recusandae doloribus</h2>
                <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate quibusdam magnam dolorem fugit, obcaecati nostrum veritatis eveniet perspiciatis provident accusamus alias?</p>
                <button class="learn">Learn More</button>
            </div>
        </div>
        <div class="pict">
            <img src="{{asset('images/home-01.png')}}" alt="">
        </div>
    </div>
    <div class="section-2">
        <div class="pict">
            <img src="{{asset('images/home-02.png')}}" alt="">
        </div>
        <div class="text">
            <div class="t-head">
                <h1 class="title">Take <span style="color:#81D98F">Health Advice</span></h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id officia veritatis.<br> Nostrum ratione tempore rem, soluta voluptate odio quo nisi delectus recusandae doloribus</h2>
                <ul class="content">
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Consequatur quos incidunt error officia magni blanditiis earum deserunt cupiditate</li>
                </ul>
                <button class="learn">Learn More</button>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="c-text">
            <div class="t-head">
                <h1 class="c-title"><span style="color:#81D98F">Categories</span> We Provide</h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h2>
            </div>
        </div>
        <div class="ca-picts">
            <div class="ca-pict">
                <img src="{{asset('images/home-03.png')}}" alt="">
                <p class="ca-text">Lose<br>Weight</p>
            </div>
            <div class="ca-pict">
                <img src="{{asset('images/home-04.png')}}" alt="">
                <p class="ca-text">Gain<br>Muscle</p>
            </div>
            <div class="ca-pict">
                <img src="{{asset('images/home-05.png')}}" alt="">
                <p class="ca-text">Maintain<br>Weight</p>
                <p class="ca-subtext">(Increase Overall<br>Fitness Health)</p>
            </div>
        </div>
    </div>
</div>   
@endsection