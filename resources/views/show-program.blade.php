@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-program-style.css')}}">
@endsection

@section('js')

@endsection


@section('content')
<div class="section">
    <div class="text">
        <h1 class="title">
        Category<br>
        {{ $program->name }}
        </h1>       
    </div>
    <div class="text">
        <h2 class="c-title"><span style="color:#81D98F">{{ $program->name }}</span> Trainer</h2>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
            <a href="/trainer/{{ $trainer->id }}">
                <div class="trainer">
                    <div class="image">
                        <img src="{{asset('images/'.$trainer->image)}}" alt="">
                    </div>
                    <p class="t-subtext">{{ $trainer->name }}</p>
                </div>
            </a>
        @endforeach
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">{{ $program->name }}</span> Workout</h2>
        </div>
        <div class="cards">
            @foreach($workouts as $workout)
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
            @endforeach
        </div>
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">{{ $program->name }}</span> Diet</h2>
        </div>
        <div class="cards">
            @foreach($diets as $diet)
                @php
                    $description = $diet->description;
                    $text = strtok($description, '.');
                @endphp
                <div class="card">
                    <a href="/diet/{{ $diet->id }}" class="card-link">
                        <img src="{{asset('images/'.$diet->image)}}" alt="">
                        <h2 class="subtitle">{{ $diet->category }}</h2>
                        <p class="card-subtext">
                            {{ $text }}.
                        </p>
                    </a>
                    <a class="b-card" href="/diet/{{ $diet->id }}" role="button">Read Recipe</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection