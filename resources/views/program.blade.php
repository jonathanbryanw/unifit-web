@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/program-style.css')}}">
@endsection

@section('js')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    $(document).ready(function() {
        var isLoggedIn = {!! json_encode($account) !!};
        var newWeightDetails = [];

        $('#bmiForm').submit(function(event) {
            if (isLoggedIn != 0) {
                var currentDetail = @json($weightdetails);
                const currentDate = new Date().toISOString().slice(0, 10);
                const existingRecord = currentDetail.find(record => record.updated_at.includes(currentDate));
                const newExistingRecord = newWeightDetails.find(record => record.updated_at.includes(currentDate));
                if (existingRecord) {
                    var weight= $('#weight').val();
                    var account = @json($account);
                    var weight_id = existingRecord.id;
                    updateWeightDetail(weight, weight_id, account);                    
                } else if(newExistingRecord){
                    var weight= $('#weight').val();
                    var account = @json($account);
                    var weight_id = newExistingRecord.id;
                    updateWeightDetail(weight, weight_id, account);
                } else{
                    var weight= $('#weight').val();
                    var account = @json($account);
                    insertWeightDetail(weight, account);
                }
            }
        });

        function insertWeightDetail(weight, account_id) {
            $.ajax({
                url: '/program',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    weight: weight,
                    account: account_id
                },
                success: function(response) {
                    console.log('Weight Detail inserted successfully.');
                    console.log(isLoggedIn);
                    updateChart(response.weightdetails);
                    newWeightDetails = response.weightdetails;
                },
                error: function(xhr) {
                    console.error('Error inserting Weight Detail:', xhr.responseText);
                }
            });
        }

        function updateWeightDetail(weight, weight_id, account_id) {
            $.ajax({
                url: '/program/'+weight_id,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    weight: weight,
                    account: account_id
                },
                success: function(response) {
                    console.log('Weight Detail updated successfully.');
                    updateChart(response.weightdetails);
                    newWeightDetails = response.weightdetails;
                },
                error: function(xhr) {
                    console.error('Error updating Weight Detail:', xhr.responseText);
                }
            });
        }

        function updateChart(chartData) {
            console.log(isLoggedIn);
            insertChart(chartData);
            const chart = Chart.getChart('myChart');
            chart.update();
            $('#weightMessage').hide();
        }

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/bmi-script.js')}}" data-is-logged-in="{{$account}}"></script>
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
                    <label for="weight">Insert your weight  <img src="{{asset('images/kg.png')}}" alt="" class="icon"></label>
                    <input type="number" name="weight" id="weight" step="any" required>  
                </div>
                <div class="height-con">
                    <label for="height">Insert your height  <img src="{{asset('images/cm.png')}}" alt="" class="icon"></label>
                    <input type="number" name="height" id="height" required>                
                </div>
                <div>
                    <button type="submit" id="calcButton" class="btn btn-secondary">Calculate</button>                
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
    @if ($account != 0 && $weightdetails->isEmpty())
        <div id="weightMessage" class="bg-secondary z-2 position-absolute w-50 p-3">
            <h4 class="text-center">You need to insert your weight first.</h4>
        </div>
    @endif
    <canvas id="myChart"></canvas>
</div>
@if ($account == 0)
    <div class="bg-warning sticky-bottom p-3">
        <h4 class="text-center">You are not logged in. Your weight will not be saved.</h4>
    </div>
@endif
<script src="{{asset('js/bmi-chart.js')}}" data-chart-data="{{ json_encode($weightdetails) }}"></script>
@endsection