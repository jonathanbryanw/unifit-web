<?php

namespace App\Http\Controllers;

use App\Models\WeightDetail;
use Illuminate\Http\Request;

class WeightDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->check()){
            $user = auth()->user()->id;
            $weightdetails = WeightDetail::where('user_id', $user)
                                        ->get();
            return view('program', [
                'user' => $user,
                'weightdetails' => $weightdetails
            ]);
            
        }else{
            $user = 0;
            $weightdetails = [];
            return view('program', [
               'user' => $user,
               'weightdetails' => $weightdetails
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
        $request->validate([
            'weight' => 'required|integer',
            'user' => 'required|integer',
        ]);
        $weightdetail = WeightDetail::create([
            'weight' => $request->weight,
            'user' => $request->user,
        ]);

        $weightdetails = WeightDetail::where('user_id', $request->user)
                                        ->get();
        return response()->json([
            'weightdetails' => $weightdetails,
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
        //
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
        $weight = $request->input('weight');
        $user = $request->input('user');
        $currentDate = $request->input('currentDate');
    
        // Find the weight detail record by ID
        $weightDetail = WeightDetail::findOrFail($id);
    
        // Update the weight and other properties
        $weightDetail->weight = $weight;
        // Update other properties as needed
    
        // Save the changes to the database
        $weightDetail->save();
    
        // Return a response or redirect as desired
        return response()->json(['weightdetails' => $weightDetail]);
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
