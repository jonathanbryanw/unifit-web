<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Program;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $program = Program::find($id);
        $trainers = User::where('users.program_id', $id)
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
        $program = $request->input('program');
    
        $user = User::findOrFail($id);
    
        $user->program_id = $program;
        $user->save();
    
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
