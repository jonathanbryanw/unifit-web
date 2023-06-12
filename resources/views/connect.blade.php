@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/connect-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
<div class="top">
    <div class="c-text">
        <div class="t-head">
            <h1 class="c-title"><span style="color:#81D98F">Trainer Connect</span></h1>
            <h3 class="subtitle">Connect with your desired trainer to guide you toward your fitness journey!</h3>
        </div>
    </div>  
</div>
{{-- <div class="content-1">
    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button">
          <i class="bi bi-search"></i>
        </button>
    </div>
</div> --}}
<div class="content-1">
    <div class="text">
        <h3 class="subtitle">Lose Weight Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
        @if ($trainer->user->program_id == 1)
            <a href="/trainer/{{ $trainer->id }}">
                <div class="trainer">
                    <div class="image">
                        <img src="{{asset('images/'.$trainer->image)}}" alt="">
                    </div>
                    <p class="subtext">{{ $trainer->user->name }}</p>
                </div>
            </a>
        @else
            <div class="trainer">
                <h3>Trainer Category is empty</h3>
            </div>
        @endif
        @endforeach
    </div>
    <div class="text">
        <h3 class="subtitle">Gain Muscle Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
        @if ($trainer->user->program_id == 3)
            <a href="/trainer/{{ $trainer->id }}">
                <div class="trainer">
                    <div class="image">
                        <img src="{{asset('images/'.$trainer->image)}}" alt="">
                    </div>
                    <p class="subtext">{{ $trainer->user->name }}</p>                
                </div>
            </a>
        @else
            <div class="trainer">
                <h3>Trainer Category is empty</h3>
            </div>
        @endif
        @endforeach
    </div>
    <div class="text">
        <h3 class="subtitle">Maintain Weight (Increase Overall Fitness Health) Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
        @if ($trainer->user->program_id == 2)
            <a href="/trainer/{{ $trainer->id }}">
                <div class="trainer">
                    <div class="image">
                        <img src="{{asset('images/'.$trainer->image)}}" alt="">
                    </div>
                    <p class="subtext">{{ $trainer->user->name }}</p>                
                </div>
            </a>
        @else
            <div class="trainer">
                <h3>Trainer Category is empty</h3>
            </div>
        @endif
        @endforeach
    </div>
</div>



@endsection