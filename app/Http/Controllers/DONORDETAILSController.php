<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonorDetails;

class DONORDETAILSController extends Controller
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

    	$donors = DonorDetails::all()->toArray();
        
        return view('home', compact('donors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DonorProfile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new DonorDetails([
          'Donor_id' => $request->get('Donor_id'),
          'Donor_Title' => $request->get('Donor_Title'),
          'Donor_FirstName' => $request->get('Donor_FirstName'),
          'Donor_LastName' => $request->get('Donor_LastName'),
          'Donor_Gender' => $request->get('Donor_Gender'),
          'Donor_EthnicOrigin' => $request->get('Donor_EthnicOrigin'),
          'Donor_Landline' => $request->get('Donor_Landline'),
          'Donor_Mobile' => $request->get('Donor_Mobile'),
          'email' => $request->get('email'),
          'Donor_House_Number' => $request->get('Donor_House_Number'),
          'Donor_Address_line1' => $request->get('Donor_Address_line1'),
          'Donor_Address_line2' => $request->get('Donor_Address_line2'),
          'Donor_Town' => $request->get('Donor_Town'),
          'Donor_City' => $request->get('Donor_City'),
          'Donor_County' => $request->get('Donor_County'),
          'Donor_Country' => $request->get('Donor_Country')
        ]);

        $donor->save();
        return redirect('/home');
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
        //
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

