<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonationHistory;

class DONATIONHISTORYController extends Controller
{
    
    //stop anyone viewing pages if they are not logged in
    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $donation_histories = DonationHistory::all()->toArray();
        
        return view('donationhistory.index', compact('donation_histories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    	return view('donationhistory.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$donationhistory = new DonationHistory([
          'TodayBloodTotal' => $request->get('TodayBloodTotal'),
          'BloodTotal' => $request->get('BloodTotal'),
          'AppointmentTotal' => $request->get('AppointmentTotal'),
          'Reward' => $request->get('Reward'),
          'YearsDonating' => $request->get('YearsDonating')
        ]);

        $donationhistory->save();
        return redirect('/donationhistory');
        
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

		$donationhistory = DonationHistory::find($id);
        
        return view('donationhistory.edit', compact('donationhistory','id'));
       
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
        
        $donationhistory = DonationHistory::find($id);
        $donationhistory->TodayBloodTotal = $request->get('TodayBloodTotal');
        $donationhistory->BloodTotal = $request->get('BloodTotal');
        $donationhistory->AppointmentTotal = $request->get('AppointmentTotal');
        $donationhistory->Reward = $request->get('Reward');
        $donationhistory->YearsDonating = $request->get('YearsDonating');
        $donationhistory->save();
        return redirect('/donationhistory');
    	

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      $donationhistory = DonationHistory::find($id);
      $donationhistory->delete();

      return redirect('/donationhistory');
        
    }
}
