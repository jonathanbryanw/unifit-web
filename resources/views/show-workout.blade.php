@extends('layouts.view')

@section('css')
<link rel="stylesheet" href="{{asset('css/show-workout-style.css')}}">
@endsection

@section('js')
<script>
    $(document).ready(function() {
        var isLoggedIn = {!! json_encode($user) !!};

        $('.checkButton').on('click', function() {
            if (isLoggedIn) {
                var workoutp_id = $(this).data('workoutprogress-id');
                $(this).toggleClass('completed');
                if ($(this).hasClass('completed')) {
                    $(this).text('Done!');
                    updateWorkoutProgress(workoutp_id, 'Done');
                } else {
                    $(this).text('Do!');
                    updateWorkoutProgress(workoutp_id, 'Not Done');
                }
            }else{
                $(this).toggleClass('completed');
                if ($(this).hasClass('completed')) {
                    $(this).text('Done!');
                } else {
                    $(this).text('Do!');
                }
            }
        });
        $('.finish').on('click', function() {
            if (isLoggedIn) {
                updateAllWorkoutProgress('Done');
            }else{
                $('.checkButton').addClass('completed');
                $('.checkButton').text('Done!');
            }
        });
        $('.restart').on('click', function() {
            if (isLoggedIn) {
                updateAllWorkoutProgress('Not Done');
            }else{
                $('.checkButton').removeClass('completed');
                $('.checkButton').text('Do!');
            }
            
        });
        function updateWorkoutProgress(workoutp_id, status) {
            $.ajax({
                type: 'PUT',
                url: '/workoutprogress/' + workoutp_id,
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    console.log('Workout Progress updated successfully.');
                },
                error: function(xhr) {
                    console.error('Error updating Workout Progress:', xhr.responseText);
                }
            });
        }
        function updateAllWorkoutProgress(status) {
            $('.checkButton').each(function() {
                var workoutProgressId = $(this).data('workoutprogress-id');
                $(this).toggleClass('completed', status === 'Done');
                $(this).text(status === 'Done' ? 'Done!' : 'Do!');
                updateWorkoutProgress(workoutProgressId, status);
            });
        }
    });
</script>
<script src="{{asset('js/video-script.js')}}"></script>
@endsection

@section('content')
    @php
        $session = 1;
        $total = 1;
        $sessionc = 0;
        foreach ($workout->workoutdetail as $workoutd) {
            if($workoutd->session == $session){
                $sessionc+=1;
            }elseif ($workoutd->session != $session && $sessionc > 1) {
                $sessionc = 0;
                $session+=1;
                $total+=1;
            }elseif ($workoutd->session != $session) {
                $session +=1;
                $sessionc = 0;
            }
        }
    @endphp
    <div class="section">
        <div class="text">
            <h2 class="title">
            WORKOUT PROGRAM<br>
            <b>{{ $workout->name }}</b><br>
            {{$total}} TIMES A WEEK<br>
            CHECKLIST
            </h2>       
            <p class="subtext">{{$workout->description}}</p>
        </div>
        <div class="buttons">
            <button class="b-top finish" style="margin-bottom: 10px">Click to <b>finish</b> week</button>
            <button class="b-top restart">Click to <b>restart</b> week</button>
        </div>
        <div class="checklist">
            @php
                $session = 1;
                $sessionc = 0;
                $i = 0;
            @endphp
            <p class="day-title">Day 1: </p> 
            <div class="day">
            @foreach ($workout->workoutdetail as $workoutd)
                @php                  
                if($workoutd->session == $session){
                    $sessionc+=1;
                }elseif ((($workoutd->session) + 1) != $session && $sessionc > 1) {
                    $sessionc = 1;
                    $session += 1;
                    echo '</div>';
                    echo '<p class="day-title">Day ' . $session . ':</p>';
                    echo '<div class="day">';                    
                }elseif ((($workoutd->session) + 1)  != $session) {
                    $session += 1;
                    $sessionc = 1;
                    echo '</div>';
                    echo '<p class="day-title">Day ' . $session . ':</p>';
                    echo '<div class="day">';                    
                }
                if($user == 0){
                    echo '<div class="work">';  
                    echo '<p class="workTitle" id="video-'.$i.'">'.$sessionc.'. '.$workoutd->title.'</p>';
                    echo '<button class="checkButton">Do!</button>';
                    echo '</div>';
                }else{
                    if($workoutsp[$i]->status == 'Not Done'){
                        echo '<div class="work">';                          
                        echo '<p class="workTitle" id="video-'.$i.'">'.$sessionc.'. '.$workoutd->title.'</p>';
                        echo '<button class="checkButton" data-workoutprogress-id="'.$workoutsp[$i]->id.'">Do!</button>'; 
                        echo '</div>';
                    }else if($workoutsp[$i]->status == 'Done'){
                        echo '<div class="work">';  
                        echo '<p class="workTitle" id="video-'.$i.'">'.$sessionc.'. '.$workoutd->title.'</p>';
                        echo '<button class="checkButton completed" data-workoutprogress-id="'.$workoutsp[$i]->id.'">Done!</button>'; 
                        echo '</div>';
                    }
                }
                echo '<div id="video-links-'.$i.'"></div>';
                echo '<script>';
                echo 'getYouTubeVideoLink("' . $workoutd->title . '", ' . $i . ');';
                echo '</script>';
                $i++;        
                @endphp

            @endforeach
            </div>
        </div>
    </div>
    @if ($user == 0)
        <div class="bg-warning sticky-bottom p-3">
        <h4 class="text-center">You are not logged in. Progress will not be saved.</h4>
        </div>
    @endif


@endsection


{{-- 
@foreach ($workout->workoutdetail as $workoutd)
    @php
        if ($workoutd->session == $session) {
            $sessionc += 1;
        } elseif ($workoutd->session != $session && $sessionc > 1) {
            $sessionc = 0;
            $session += 1;
            $total += 1;
        } elseif ($workoutd->session != $session) {
            $session += 1;
            $sessionc = 0;
        }
    @endphp

    <p>Session Total: {{ $total }}</p>
    <p>Session Count: {{ $sessionc }}</p>
    <p>Session Count: {{ $sessionc }}</p>
@endforeach --}}