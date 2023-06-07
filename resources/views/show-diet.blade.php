@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-diet-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
    <h3 class="header">Read our diet recomendation!</h3>
    <div class="section">
        <div class="image">
            <img src="{{asset('images/'.$diet->image)}}" alt="">

        </div>
        <div class="text">
            <h1 class="subtitle">{{ $diet->name }}</h1>
            <h1 class="subtitle">{{ $diet->category }}</h1>
            <h3>{{$diet->program->name}}</h3>
            <p class="subtext">
                {{ $diet->description }}
            </p>
        </div>
    </div>
@endsection