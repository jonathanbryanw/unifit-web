@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/diet-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
<div class="section">
    <div class="text">
        <div class="t-head">
            <h1 class="title">Checkout our<span style="color:#81D98F"> Diet Choices</span></h1>
            <h2 class="subtitle">Choose the perfect diet recommendation that suits your lifestyle and preference.</h2>
        </div>
    </div>
    <div class="c-section">
        <div class="c-text">
            <h2 class="c-title"><span style="color:#81D98F">Lose</span> Weight</h2>
        </div>
        <div class="cards">
            @foreach($diets as $diet)
                @if ($diet->program_id == 1)
                    @php
                        $description = $diet->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <img src="{{asset('images/'.$diet->image)}}" alt="">
                        <h2 class="subtitle">{{ $diet->name }}</h2>
                        <p class="card-subtext">
                            {{ $text }}.
                        </p>
                        <a class="b-card" href="/diet/{{ $diet->id }}" role="button">Read Recipe</a>
                    </div>
                @else
                    <div class="card">
                        <h2>Diet Category is empty</h2>
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
            @foreach($diets as $diet)
                @if ($diet->program_id == 3)
                    @php
                        $description = $diet->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <img src="{{asset('images/'.$diet->image)}}" alt="">
                        <h2 class="subtitle">{{ $diet->name }}</h2>
                        <p class="card-subtext">
                            {{ $text }}.
                        </p>
                        <a class="b-card" href="/diet/{{ $diet->id }}" role="button">Read Recipe</a>
                    </div>
                @else
                    <div class="card">
                        <h2>Diet Category is empty</h2>
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
            @foreach($diets as $diet)
                @if ($diet->program_id == 2)
                    @php
                        $description = $diet->description;
                        $text = strtok($description, '.');
                    @endphp
                    <div class="card">
                        <img src="{{asset('images/'.$diet->image)}}" alt="">
                        <h2 class="subtitle">{{ $diet->name }}</h2>
                        <p class="card-subtext">
                            {{ $text }}.
                        </p>
                        <a class="b-card" href="/diet/{{ $diet->id }}" role="button">Read Recipe</a>
                    </div>
                @else
                    <div class="card">
                        <h2>Diet Category is empty</h2>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
</div>
@endsection