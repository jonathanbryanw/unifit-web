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
    <a class="b-card" href="/trainer/{{$trainer->id}}/edit" role="button">Edit Trainer</a>
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
                <input type="text" class="form-control" id="name" name="name" value="{{ $trainer->name }}" required>
            </div>
            <div class="form-group">
                <label for="program">Program:</label>
                <select class="form-select" id="program" name="program">
                    @foreach ($programs as $program)
                        @if ($trainer->program == $program)
                            <option selected value="{{$program->id}}">{{$program->name}}</option>                            
                        @else
                            <option value="{{$program->id}}">{{$program->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="categories">Categories:</label>
                <input type="text" class="form-control" id="categories" name="categories" value="{{ $text }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $trainer->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection
