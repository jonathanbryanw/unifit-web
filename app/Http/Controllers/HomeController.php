<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Workout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Workout::where('program_id', 1)
                    ->get();
        $diets = Diet::where('program_id', 1)
                ->get();  
        return view('home', [
            'workouts' => $workouts,
            'diets' => $diets,
        ]);
    }

}
