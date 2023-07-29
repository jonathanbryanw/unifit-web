<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Http\Request;

class DietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return: Response
     */
    public function index()
    {
        $diets = Diet::all();
        return view('diet', [
            'diets' => $diets
        ]);
    }


    /**
     * Display the specified resource.
     *
     * param: id
     * return: Response
     */
    public function show($id)
    {
        $diet = Diet::find($id);
        return view('show-diet', compact('diet'));
    }

}
