@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-trainer-style.css')}}">
@endsection

@section('js')

@endsection



@section('content')
@php
    $text = $trainer->category;
    $categories = explode(';', $text);
@endphp
<h3 class="header">Meet your trainer!</h3>
<div class="section">
    <div class="image">
        <img src="{{asset('images/'.$trainer->image)}}" alt="">
    </div>
    <div class="text">
        <h1 class="subtitle">{{ $trainer->user->name }}</h1>
        <h2 class="subtitle">{{ $trainer->user->program->name }} Trainer</h2>
        <ul>
            @foreach ($categories as $category)
                <li class="category-item">{{ $category }}</li>
            @endforeach
        </ul>
        <p class="subtext">
            {!! $trainer->description !!}
        </p>
    </div>
</div>
@endsection