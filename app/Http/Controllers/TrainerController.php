<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = User::where('role_id', 3)
                    ->get(); 
        if(auth()->check()){
            $user = auth()->user()->role_id;
            $users = [];
            if($user == 1){
                $users = User::all();
            }
            return view('connect', [
                'trainers' => $trainers,
                'role' => $user,
                'users' => $users
            ]);
        }
        else{
            $user = 0;
            $users = [];
            return view('connect', [
                'trainers' => $trainers,
                'role' => $user,
                'users' => $users
            ]);
        }
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
        $imageName = 'user.png';
        $id = $request->user_id;
        $trainer = User::where('id', $id)->update([
            'description' => 'This is an automated description.',
            'role_id' => 3,
            'category' => 'Sample Category',
            'image' => $imageName
        ]);

        return redirect('/trainer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainer = User::find($id);
        if(auth()->check()){
            $role = auth()->user()->role_id;
            $user = auth()->user()->id;
            return view('show-trainer', [
                'trainer' => $trainer,
                'role' => $role,
                'user' => $user
            ]);
        }else{
            $role = 0;
            $user = 0;
            return view('show-trainer', [
                'trainer' => $trainer,
                'role' => $role,
                'user' => $user
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
        $user = Auth::user();
        $trainer = User::findOrFail($id);
        $programs = Program::all();

        if($user->role_id == 1 || $trainer->id == $user->id){
            return view('edit-trainer', [
                'trainer' => $trainer,
                'programs' => $programs
            ]);
        }else{
            redirect('/trainer');
        }

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
        if(isset($request->image)) {
            $imageName = time() . '_' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $trainer = User::where('id', $id)->update([
                'image' => $imageName
            ]);
        }
        $trainer = User::where('id', $id)->update([
            'category' => $request->categories,
            'description' => $request->description,
            'name' => $request->name,
            'program_id' => $request->program
        ]);

        return redirect('/trainer/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $trainer = User::where('id', $id)->update([
            'role_id' => 2,
        ]);

        return redirect('/trainer');
    }
}
