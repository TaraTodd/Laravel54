<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;

class REWARDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewards = Reward::all()->toArray();
        
        return view('reward.index', compact('rewards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reward.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reward = new Reward([
          'Reward_Name' => $request->get('Reward_Name'),
          'Reward_Type' => $request->get('Reward_Type'),
          'Reward_Description' => $request->get('Reward_Description'),
          'Reward_BloodTotal' => $request->get('Reward_BloodTotal'),
          'Reward_YearsDonating' => $request->get('Reward_YearsDonating')
        ]);

        $reward->save();
        return redirect('/reward');
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

        $reward = Reward::find($id);
        
        return view('reward.edit', compact('reward','id'));
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
        
    	$reward = Reward::find($id);
        $reward->Reward_Name = $request->get('Reward_Name');
        $reward->Reward_Type = $request->get('Reward_Type');
        $reward->Reward_Description = $request->get('Reward_Description');
        $reward->Reward_BloodTotal = $request->get('Reward_BloodTotal');
        $reward->Reward_YearsDonating = $request->get('Reward_YearsDonating');
        $reward->save();
        return redirect('/reward');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      $reward = Reward::find($id);
      $reward->delete();

      return redirect('/reward');
        
    }
}
