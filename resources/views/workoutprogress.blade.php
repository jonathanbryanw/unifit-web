@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/workout-style.css')}}">
@endsection

@section('js')

@endsection

@section('content')

<h2>{{$workoutprogress[0]->workoutdetail->workout->name}}</h2>
<h3>{{$workoutprogress[0]->workoutdetail->workout->description}}</h3>
<table>
    <th>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Day</td>
            <td>Status</td>
        </tr>
    </th>
    @foreach($workoutprogress as $workoutp)
        <tr>
            <td>{{$workoutp->id}}</td>
            <td>{{$workoutp->workoutdetail->title}}</td>
            <td>{{$workoutp->workoutdetail->session}}</td>
            @if($workoutp->status == 'Done')
                <td style="background-color: green;color: white">Done!</td>
            @else
                <td style="background-color: red;color: white">Not Done!</td>
            @endif
        </tr>
    @endforeach
</table>
<br>


@endsection