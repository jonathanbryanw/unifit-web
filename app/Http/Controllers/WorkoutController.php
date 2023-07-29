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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->check()){
            $workout = Workout::find($id);
            $account = auth()->user()->id;
            $firstwp = $workout->workoutdetail[0]->id;
            $lastwp = $workout->workoutdetail[count($workout->workoutdetail)-1]->id;
            $workoutsp = WorkoutProgress::where('account_id', $account)
                                        ->whereBetween('workoutdetail_id', [$firstwp,$lastwp])
                                        ->get();
            if($workoutsp->isEmpty()){
                for($i = $firstwp; $i <= $lastwp; $i++){
                    $newWorkoutProgress = new WorkoutProgress();
                    $newWorkoutProgress->workoutdetail_id = $i;
                    $newWorkoutProgress->account_id = $account;
                    $newWorkoutProgress->status = 'Not Done';
                    $newWorkoutProgress->save();
                }

                $workoutsp = WorkoutProgress::where('account_id', $account)
                                            ->whereBetween('workoutdetail_id', [$firstwp,$lastwp])
                                            ->get();
            }
            return view('show-workout', [
                'workout' => $workout,
                'account' => $account,
                'workoutsp' => $workoutsp
            ]);
            
        }else{
            $workout = Workout::find($id);
            $account = 0;
            $workoutsp = [];
            return view('show-workout', [
               'workout' => $workout,
               'account' => $account,
               'workoutsp' => $workoutsp
            ]);
        }
    }

}
