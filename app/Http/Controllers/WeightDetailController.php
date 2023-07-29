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
            $account = auth()->user()->id;
            $weightdetails = WeightDetail::where('account_id', $account)
                                        ->get();
            return view('program', [
                'account' => $account,
                'weightdetails' => $weightdetails
            ]);
            
        }else{
            Session::flash('message', 'You need to log in to access the Find Program page');
            return redirect(url('/register'));
        }
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
            'account' => 'required|integer',
        ]);
        $newWeightDetail =new WeightDetail();
        $newWeightDetail->weight = $request->weight;
        $newWeightDetail->account_id = $request->account;
        $newWeightDetail->save();

        $weightdetails = WeightDetail::where('account_id', $request->account)
                                    ->get();
        return response()->json([
            'weightdetails' => $weightdetails,
            'account' => $request->account
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
        $weight = $request->input('weight');
    
        $weightDetail = WeightDetail::findOrFail($id);
    
        $weightDetail->weight = $weight;
        $weightDetail->save();

        $weightdetails = WeightDetail::where('account_id', $request->account)
                                        ->get();
    
        return response()->json([
            'weightdetails' => $weightdetails,
            'account' => $request->account
        ]);
    }
}
