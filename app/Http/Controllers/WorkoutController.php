<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\WorkoutProgress;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->only('show');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Workout::all();
        return view('workout', [
            'workouts' => $workouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->check()){
            $workout = Workout::find($id);
            $user = auth()->user()->id;
            $firstwp = $workout->workoutdetail[0]->id;
            $lastwp = $workout->workoutdetail[count($workout->workoutdetail)-1]->id;
            $workoutsp = WorkoutProgress::where('user_id', $user)
                                        ->whereBetween('workoutdetail_id', [$firstwp,$lastwp])
                                        ->get();
            if($workoutsp->isEmpty()){
                for($i = $firstwp; $i <= $lastwp; $i++){
                    $newWorkoutProgress = new WorkoutProgress();
                    $newWorkoutProgress->workoutdetail_id = $i;
                    $newWorkoutProgress->user_id = $user;
                    $newWorkoutProgress->status = 'Not Done';
                    $newWorkoutProgress->save();
                }

                $workoutsp = WorkoutProgress::where('user_id', $user)
                                            ->whereBetween('workoutdetail_id', [$firstwp,$lastwp])
                                            ->get();
            }
            return view('show-workout', [
                'workout' => $workout,
                'user' => $user,
                'workoutsp' => $workoutsp
            ]);
            
        }else{
            $workout = Workout::find($id);
            $user = 0;
            $workoutsp = [];
            return view('show-workout', [
               'workout' => $workout,
               'user' => $user,
               'workoutsp' => $workoutsp
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
