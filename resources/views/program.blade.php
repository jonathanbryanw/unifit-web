@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/program-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/bmi-script.js')}}"></script>
@endsection

@section('content')
<div class="bmi">
    <div class="c-text">
        <h1 class="c-title">Find Your <span style="color:#81D98F">Unified Fitness Program!</span></h1>
        <h3 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam<br> sagittis aliquam, tortor sollicitudin egestas convallis.</h3>
    </div>
    <div class="bmiInput">
        <div class="form">
            <form action="" id="bmiForm">
                <div>
                    <label for="weight">Weight: (kg)</label>
                    <input type="number" name="weight" id="weight" required>  
                </div>
                <div>
                    <label for="height">Height: (cm)</label>
                    <input type="number" name="height" id="height" required>                
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary">Submit</button>                
                    <p id="result"></p>                    
                </div>
            </form>
        </div>
        <div class="pict">
            <img src="{{asset('images/home-02.png')}}" alt="">
        </div>  
    </div>    
   
</div>  
@endsection