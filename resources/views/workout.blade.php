@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/workout-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
@if(session('error') && session('login_redirect'))
    <script>
        window.onload = function() {
            alert("{{ session('error') }}");
            window.location.href = "{{ route('login') }}";
        }
    </script>
@endif
<div class="section">
    <div class="text">
        <div class="t-head">
            <h1 class="title">Checkout our<span style="color:#81D98F"> Workout Choices</span></h1>
            <h3 class="subtitle">Choose the best workout program that fits your schedule and preference.</h3>
        </div>
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">Lose</span> Weight</h2>
        </div>
        <div class="cards">
            @foreach($workouts as $workout)
                @if ($workout->program_id == 1)
                    @php
                        $description = $workout->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <a href="/workout/{{ $workout->id }}" class="card-link" draggable="false">
                            <img src="{{asset('images/'.$workout->image)}}" alt="">
                            <h2 class="subtitle">{{ $workout->name }}</h2>
                            <p class="card-subtext">
                                {{ $text }}.
                            </p>
                        </a>
                        <a class="b-card" href="/workout/{{ $workout->id }}" role="button">See Workout</a>
                    </div>

                @endif
            @endforeach
        </div>
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">Gain</span> Muscle</h2>
        </div>
        <div class="cards">
            @foreach($workouts as $workout)
                @if ($workout->program_id == 3)
                    @php
                        $description = $workout->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <a href="/workout/{{ $workout->id }}" class="card-link" draggable="false">
                            <img src="{{asset('images/'.$workout->image)}}" alt="">
                            <h2 class="subtitle">{{ $workout->name }}</h2>
                            <p class="card-subtext">
                                {{ $text }}.
                            </p>
                        </a>
                        <a class="b-card" href="/workout/{{ $workout->id }}" role="button">See Workout</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">Maintain</span> Weight (Increase Overall Fitness Health)</h2>
        </div>
        <div class="cards">
            @foreach($workouts as $workout)
                @if ($workout->program_id == 2)
                    @php
                        $description = $workout->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <a href="/workout/{{ $workout->id }}" class="card-link" draggable="false">
                            <img src="{{asset('images/'.$workout->image)}}" alt="">
                            <h2 class="subtitle">{{ $workout->name }}</h2>
                            <p class="card-subtext">
                                {{ $text }}.
                            </p>
                        </a>
                        <a class="b-card" href="/workout/{{ $workout->id }}" role="button">See Workout</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection