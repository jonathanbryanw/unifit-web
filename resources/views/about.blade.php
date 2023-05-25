@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/about-style.css')}}">
@endsection

@section('js')

@endsection



@section('content')
<div class="top">
    <div class="c-text">
        <div class="t-head">
            <h1 class="c-title">Get To Know<span style="color:#81D98F">About Us</span></h1>
            <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
            <p class="subtext">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum veritatis fuga, dicta ut voluptatum dolorem nisi ab,<br> inventore quo aliquam hic commodi officia sed asperiores ipsum perspiciatis, consectetur deleniti eaque.
            </p>
        </div>
        <div class="img-top">
            <img src="{{asset('images/odan.jpg')}}" alt="">
        </div>
    </div>   
</div> 



@endsection