@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-workout-style.css')}}">
@endsection

@section('js')

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
            CHECKLIST
            </h2>
            <p class="subtext">{{$workout->description}}</p>
        </div>
        <div class="checklist">
            @php
                $session = 1;
                $sessionc = 0;
            @endphp
            <p>Day 1: </p> 
            @foreach ($workout->workoutdetail as $workoutd)
                @php                  
                if($workoutd->session == $session){
                    $sessionc+=1;
                }elseif ((($workoutd->session) + 1) != $session && $sessionc > 1) {
                    $sessionc = 0;
                    $session+=1;
                    echo '<p>Day ' . $session . ':</p>';
                }elseif ((($workoutd->session) + 1)  != $session) {
                    $session +=1;
                    $sessionc = 0;
                    echo '<p>Day ' . $session . ':</p>';
                }
                @endphp
                <p>{{$workoutd->title}}</p>
            @endforeach
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