<?php

namespace App\Http\Controllers;

use App\Models\WorkoutProgress;
use Illuminate\Http\Request;

class WorkoutProgressController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workoutProgress = WorkoutProgress::findOrFail($id);
        $workoutProgress->status = $request->input('status');
        $workoutProgress->save();
    
        return response()->json(['message' => 'Workout Progress updated successfully.']);
    }
}
