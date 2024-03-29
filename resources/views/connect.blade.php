@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/connect-style.css')}}">
@endsection

@section('js')
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this trainer?');
    }
    function confirmAdd() {
        return confirm('Are you sure you want to add this trainer?');
    }
</script>
@endsection

@section('content')
<div class="top">
    <div class="c-text">
        <div class="t-head">
            <h1 class="c-title"><span style="color:#81D98F">Trainer</span> Connect</h1>
            <h3 class="subtitle">Connect with your desired trainer to guide you toward your fitness journey!</h3>
        </div>
    </div>  
    @if ($role == 1)
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#accountModal">Add Trainer</button>
    @endif
</div>
<div class="content-1">
    <div class="text">
        <h3 class="subtitle">Lose Weight Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
            @if ($trainer->program_id == 1)
                <a href="/trainer/{{ $trainer->id }}">
                    <div class="trainer">
                        <div class="image">
                            <img src="{{asset('images/'.$trainer->image)}}" alt="">
                        </div>
                        <p class="subtext">{{ $trainer->name }}</p>
                </a>
                        @if ($role == 1)
                            <div class="d-flex justify-content-center">
                                <form action="/trainer/{{ $trainer->id }}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-button">Delete</button>
                                </form>
                            </div>                        
                        @endif
                    </div>
            @endif
            
        @endforeach
    </div>
    <div class="text">
        <h3 class="subtitle">Gain Muscle Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
            @if ($trainer->program_id == 3)
                <a href="/trainer/{{ $trainer->id }}">
                    <div class="trainer">
                        <div class="image">
                            <img src="{{asset('images/'.$trainer->image)}}" alt="">
                        </div>
                        <p class="subtext">{{ $trainer->name }}</p>
                </a>
                        @if ($role == 1)
                            <div class="d-flex justify-content-center">
                                <form action="/trainer/{{ $trainer->id }}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-button">Delete</button>
                                </form>
                            </div>                        
                        @endif                
                    </div>
            @endif
        @endforeach
    </div>
    <div class="text">
        <h3 class="subtitle">Maintain Weight (Increase Overall Fitness Health) Trainer</h3>
    </div>
    <div class="trainers">
        @foreach($trainers as $trainer)
            @if ($trainer->program_id == 2)
                <a href="/trainer/{{ $trainer->id }}">
                    <div class="trainer">
                        <div class="image">
                            <img src="{{asset('images/'.$trainer->image)}}" alt="">
                        </div>
                        <p class="subtext">{{ $trainer->name }}</p>
                </a>
                        @if ($role == 1)
                            <div class="d-flex justify-content-center">
                                <form action="/trainer/{{ $trainer->id }}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-button">Delete</button>
                                </form>
                            </div>                         
                        @endif
                    </div>
            @endif
        @endforeach
    </div>
</div>
@if ($role == 1)
    <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountModalLabel">Add Trainer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count=1;
                            @endphp
                            @foreach($accounts as $account)
                                @if($account->role_id == 2)
                                    <tr>
                                        <td>{{ $count}}</td>
                                        <td>{{ $account->name }}</td>
                                        <td>{{ $account->program->name }}</td>
                                        <td>
                                            <form action="/trainer" method="POST" enctype="multipart/form-data" onsubmit="return confirmAdd()">
                                                @csrf
                                                <input type="hidden" name="account_id" value="{{ $account->id }}">
                                                <button type="submit" class="btn btn-success">Add as Trainer</button>
                                            </form>                                        
                                        </td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

{{-- <div class="content-1">
    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button">
          <i class="bi bi-search"></i>
        </button>
    </div>
</div> --}}