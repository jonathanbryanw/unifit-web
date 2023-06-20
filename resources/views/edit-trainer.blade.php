@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/edit-trainer-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')
@php
    $text = $trainer->category;
    $categories = explode(';', $text);
@endphp
<h3 class="header">Edit Trainer</h3>
<div class="section">
    <form action="/trainer/{{ $trainer->id }}" method="POST" enctype="multipart/form-data" class="editForm">
        @csrf
        @method('PUT')
        <div class="image">
            <img src="{{asset('images/'.$trainer->image)}}" alt="">
            <div class="form-group">
                <label for="image">Upload New Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
        <div class="text">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $trainer->user->name }}">
            </div>
            <div class="form-group">
                <label for="program">Program:</label>
                <input type="text" class="form-control" id="program" name="program" value="{{ $trainer->user->program->name }}">
            </div>
            <div class="form-group">
                <label for="categories">Categories:</label>
                <input type="text" class="form-control" id="categories" name="categories" value="{{ $text }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $trainer->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection
