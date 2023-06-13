@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/program-style.css')}}">
@endsection

@section('js')
<script src="{{asset('js/bmi-script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script>
    $(document).ready(function() {
        $.ajax({
            url: '/your-route-url',
            type: 'POST',
            data: {
                myVariable: myVariable
            },
            success: function(response) {
                // Handle the success response from the controller
                console.log(response);
            },
            error: function(xhr) {
                // Handle any errors that occur during the request
                console.error(xhr.responseText);
            }
        });
    });
</script> --}}
@endsection

@section('content')
<div class="bmi">
    <div class="c-text">
        <h1 class="c-title">Find Your <span style="color:#81D98F">Unified Fitness Program!</span></h1>
        <h3 class="subtitle">Insert your body weight and height to find the perfect personalized fitness program for you!</h3>
    </div>
    <div class="bmiInput">
        <div class="form">
            <form action="" id="bmiForm">
                <div class="weight-con">
                    <label for="weight">Insert your weight</label>
                    <input type="number" name="weight" id="weight" step="any" required>  
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
    <div class="w-text">
        <h1 class="w-title">Your <span style="color:#81D98F">Weight Progress</span></h1>
    </div>
    @if ($weightdetails->isEmpty())
        <div class="bg-secondary z-2 position-absolute w-50 p-3">
            <h4 class="text-center">You need to insert your weight first.</h4>
        </div>
    @endif
    <canvas id="myChart"></canvas>
</div>
@if ($user == 0)
    <div class="bg-warning sticky-bottom p-3">
        <h4 class="text-center">You are not logged in. Your weight will not be saved.</h4>
    </div>
@endif
<script src="{{asset('js/bmi-chart.js')}}" data-chart-data="{{ json_encode($weightdetails) }}"></script>
@endsection