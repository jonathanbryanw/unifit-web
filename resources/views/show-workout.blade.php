@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-workout-style.css')}}">
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.checkButton').on('click', function() {
            $(this).toggleClass('completed');
            if ($(this).hasClass('completed')) {
                $(this).text('Done!');
            } else {
                $(this).text('Do!');
            }
        });
        $('.finish').on('click', function() {
            $('.checkButton').addClass('completed');
            $('.checkButton').text('Done!');
        });
        $('.restart').on('click', function() {
            $('.checkButton').removeClass('completed');
            $('.checkButton').text('Do!');
        });
    });
</script>
@endsection

@section('content')
    @php
        $session = 1;
        $total = 1;
        $sessionc = 0;
        foreach ($workout->workoutdetail as $workoutd) {
            if($workoutd->session == $session){
                $sessionc+=1;
            }elseif ($workoutd->session != $session && $sessionc > 1) {
                $sessionc = 0;
                $session+=1;
                $total+=1;
            }elseif ($workoutd->session != $session) {
                $session +=1;
                $sessionc = 0;
            }
        }
    @endphp
    <div class="section">
        <div class="text">
            <h2 class="title">
            WORKOUT PROGRAM<br>
            <b>{{ $workout->name }}</b><br>
            {{$total}} TIMES A WEEK<br>
            CHECKLIST {{$user}}
            </h2>
            <p class="subtext">{{$workout->description}}</p>
        </div>
        <div class="buttons">
            <button class="b-top finish" style="margin-bottom: 10px">Click to <b>finish</b> week</button>
            <button class="b-top restart">Click to <b>restart</b> week</button>
        </div>
        <div class="checklist">
            @php
                $session = 1;
                $sessionc = 0;
            @endphp
            <p class="day-title">Day 1: </p> 
            <div class="day">
            @foreach ($workout->workoutdetail as $workoutd)
                @php                  
                if($workoutd->session == $session){
                    $sessionc+=1;
                }elseif ((($workoutd->session) + 1) != $session && $sessionc > 1) {
                    $sessionc = 1;
                    $session+=1;
                    echo '</div>';
                    echo '<p class="day-title">Day ' . $session . ':</p>';
                    echo '<div class="day">';                    
                }elseif ((($workoutd->session) + 1)  != $session) {
                    $session +=1;
                    $sessionc = 1;
                    echo '</div>';
                    echo '<p class="day-title">Day ' . $session . ':</p>';
                    echo '<div class="day">';                    
                }
                if($user == 0){
                    echo '<div class="work">';  
                    echo '<p class="workTitle">'.$sessionc.'. '.$workoutd->title.'</p>';
                    echo '<button class="checkButton">Do!</button>';
                    echo '</div>';
                }else{
                    echo '<p class="workTitle">'.$sessionc.'. '.$workoutd->title.'</p>'; 
                }                
                @endphp
                
            @endforeach
            </div>
        </div>
    </div>
@endsection


{{-- @php
    $session = 1;
    $total = 0;
    $sessionc = 0;
@endphp

@foreach ($workout->workoutdetail as $workoutd)
    @php
        if ($workoutd->session == $session) {
            $sessionc += 1;
        } elseif ($workoutd->session != $session && $sessionc > 1) {
            $sessionc = 0;
            $session += 1;
            $total += 1;
        } elseif ($workoutd->session != $session) {
            $session += 1;
            $sessionc = 0;
        }
    @endphp

    <p>Session Total: {{ $total }}</p>
    <p>Session Count: {{ $sessionc }}</p>
    <p>Session Count: {{ $sessionc }}</p>
@endforeach --}}