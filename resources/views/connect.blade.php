@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/connect-style.css')}}">
@endsection

@section('js')

@endsection



@section('content')
<div class="top">
    <div class="c-text">
        <div class="t-head">
            <h1 class="c-title"><span style="color:#81D98F">Trainer Connect</span></h1>
            <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam</h3>
        </div>
    </div>  
</div>
<div class="content-1">
    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button">
          <i class="bi bi-search"></i>
        </button>
    </div>
</div>
<div class="content-2">
    <div class="text">
        <h3 class="subtitle">Lose Weight Trainer</h3>
    </div>
    <div class="images">
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 1</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 2</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 3</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 4</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 5</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 6</p>
        </div>
    </div>
    <div class="text">
        <h3 class="subtitle">Gain Muscle Trainer</h3>
    </div>
    <div class="images">
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 1</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 2</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 3</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 4</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 5</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 6</p>
        </div>
    </div>
    <div class="text">
        <h3 class="subtitle">Maintain Weight (Increase Overall Fitness Health) Trainer</h3>
    </div>
    <div class="images">
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 1</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 2</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 3</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 4</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 5</p>
        </div>
        <div class="image">
            <img src="{{asset('images/odan.jpg')}}" alt="">
            <p class="subtext">Name 6</p>
        </div>
    </div>
</div>



@endsection