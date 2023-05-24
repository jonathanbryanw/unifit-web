@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/program-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/bmi-script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <div class="weight-con">
                    <label for="weight">Insert your weight</label>
                    <input type="number" name="weight" id="weight" required>  
                </div>
                <div class="height-con">
                    <label for="height">Insert your height</label>
                    <input type="number" name="height" id="height" required>                
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary">Calculate</button>                
                    <p id="result"></p>                    
                </div>
            </form>
        </div>
        <div class="pict">
            <img src="{{asset('images/home-02.png')}}" alt="">
        </div>  
    </div>    
</div> 

<div class="bmiChart">
    <canvas id="myChart"></canvas>
</div>
<script src="{{asset('js/bmi-chart.js')}}"></script>
@endsection