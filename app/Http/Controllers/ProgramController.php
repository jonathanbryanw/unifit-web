<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Diet;
use App\Models\Program;

use App\Models\Workout;
use Illuminate\Http\Request;

class ProgramController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Program::find($id);
        $trainers = Account::where('accounts.program_id', $id)
                            ->where('role_id', 3)
                            ->get();
        $workouts = Workout::where('program_id', $id)
                            ->get();
        $diets = Diet::where('program_id', $id)
                            ->get();                            
        return view('show-program', [
            'program' => $program,
            'trainers' => $trainers,
            'workouts' => $workouts,
            'diets' => $diets,
        ]);
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
        $program = $request->input('program');
    
        $account = Account::findOrFail($id);
    
        $account->program_id = $program;
        $account->save();
    
    }

}
