<?php

namespace App\Http\Controllers;

use App\Models\WeightDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            Session::flash('message', 'You need to log in to access the Find Program page');
            return redirect(url('/register'));
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
        $newWeightDetail =new WeightDetail();
        $newWeightDetail->weight = $request->weight;
        $newWeightDetail->user_id = $request->user;
        $newWeightDetail->save();

        $weightdetails = WeightDetail::where('user_id', $request->user)
                                    ->get();
        return response()->json([
            'weightdetails' => $weightdetails,
            'user' => $request->user
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
    
        $weightDetail = WeightDetail::findOrFail($id);
    
        $weightDetail->weight = $weight;
        $weightDetail->save();

        $weightdetails = WeightDetail::where('user_id', $request->user)
                                        ->get();
    
        return response()->json([
            'weightdetails' => $weightdetails,
            'user' => $request->user
        ]);
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
