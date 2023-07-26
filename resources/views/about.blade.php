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
                Our goal at UniFit is to empower people on their fitness journey by offering a centralized platform that integrates exercise routines, food advice, links to trainers, and interactive features. With the help of a team of committed professionals, we work to provide a welcoming community where accounts can access tailored resources and qualified advice, empowering them to realize their full potential, achieve their health and fitness objectives, and live happier, more fulfilling lives.
            </p>
        </div>
        <div class="img-top">
            <img src="{{asset('images/about-01.png')}}" alt="">
        </div>
    </div>   
</div> 
<div class="middle">
    <div class="section-1">
        <div class="s-text">
            <h2 class="s-title"><span style="color:#81D98F">Our</span> Trainer</h2>
            <h3 class="subtitle">Your fitness journey will be transformed by UniFit's Trainer Connect program.</h3>
        </div>
        <div class="s-card-1">
            <div class="t-img">
                <img src="{{asset('images/about-02.png')}}" alt="">
            </div>
            <div class="t-text">
                <p class="subtext">
                    This service matches you with a skilled collection of fitness trainers that match your preferences and goals, whether you're just starting out or an experienced fitness fanatic. You have access to a variety of profiles with UniFit's Trainer Connect, including certifications, specialties, enabling you to make a smart choice. Find the ideal trainer who will provide you individualized coaching, design custom training routines, and provide continuing support to keep you motivated and get the results you want. Your key to realizing your maximum fitness potential and discovering the transformative power of expert instruction is UniFit's Trainer Connect program.
                </p>
                <a class="b-card" href="/trainer/" role="button">Trainer Connect</a>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="s-text">
            <h2 class="s-title">Meet <span style="color:#81D98F">The Team</span></h2>
            <h3 class="subtitle">Contact our team to ask more information about UniFit and start your fitness journey!</h3>
        </div>
        <div class="s-card-2">
            <div class="card">
                <img src="{{asset('images/about-03.png')}}" alt="">
                <p class="name">
                    Felix
                </p>
                <p class="details">
                    +62 321 321 321<br>Felix@email.com
                </p>
            </div>
            <div class="card">
                <img src="{{asset('images/about-04.png')}}" alt="">
                <p class="name">
                    Jonathan
                </p>
                <p class="details">
                    +62 432 432 432<br>Jonathan@email.com
                </p>
            </div>
            <div class="card">
                <img src="{{asset('images/about-05.png')}}" alt="">
                <p class="name">
                    Jordan
                </p>
                <p class="details">
                    +62 543 543 543<br>Jordan@email.com
                </p>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="s-text">
            <h2 class="s-title">Take A Look At<span style="color:#81D98F"> Our Clients</span></h2>
            <h3 class="subtitle">Read our friend success stories from using UniFit to support their fitness journey.</h3>
        </div>
        <div class="s-card-3">
            <div class="texts-3">
                <h5 class="texts-3-title">Felix Fithub</h5>
                <p class="texts-3-content">
                    "I credit UniFit with helping me lose a remarkable amount of weight. I was able to stick to a customised routine with their personalized fitness program that was ideal for my height and weight. The diet program included professional advice and meal planning that assisted me in choosing healthier foods and obtaining a balanced diet. The training checklist routines and progress tracker helped me keep focused and on track. But the trainer connect program, where I met a fantastic fitness trainer who gave me great advice and support throughout my journey, was the real game-changer. I lost the extra weight and acquired renewed confidence as well as a better lifestyle thanks to UniFit. My life has been revolutionized by UniFit."
                </p>
            </div>
            <div class="images-3">
                <div class="image">
                    <img src="{{asset('images/about-06.png')}}" alt="">
                    <p class="image-text">Before</p>
                </div>
                <div class="image">
                    <img src="{{asset('images/about-07.png')}}" alt="">
                    <p class="image-text">After</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="s-text">
            <h2 class="s-title">Join and <span style="color:#81D98F">Evolve Your Life Style</span></h2>
        </div>
        <div class="s-card-4">
            <div class="cards-4">
                <h2 class="s-title">Let's start <span style="color:#81D98F">Your Journey!</span></h2>
                <a class="b-card" href="/register/" role="button">Register</a>
            </div>
            <div class="cards-4">
                <h2 class="s-title">Are you a<span style="color:#81D98F"> Trainer?</span></h2>
                <p class="cards-4-text">
                    Contact Us
                    <br><br>
                    +62 123 123 123<br>
                    unifit@email.com
                </p>
            </div>
        </div>
    </div>
</div>
@endsection