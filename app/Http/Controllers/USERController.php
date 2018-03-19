<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class USERController extends Controller
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
        $users = User::all()->toArray();
        
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User([
          'Donor_Title' => $request->get('Donor_Title'),
          'Donor_FirstName' => $request->get('Donor_FirstName'),
          'Donor_LastName' => $request->get('Donor_LastName'),
          'Donor_Gender' => $request->get('Donor_Gender'),
          'Donor_EthnicOrigin' => $request->get('Donor_EthnicOrigin'),
          'Donor_Landline' => $request->get('Donor_Landline'),
          'Donor_Mobile' => $request->get('Donor_Mobile'),
          'Donor_Postcode' => $request->get('Donor_Postcode'),
          'Donor_House_Number' => $request->get('Donor_House_Number'),
          'Donor_Donor_Address_line1' => $request->get('Donor_Donor_Address_line1'),
          'Donor_Donor_Address_line2' => $request->get('Donor_Donor_Address_line2'),
          'Donor_Town' => $request->get('Donor_Town'),
          'Donor_City' => $request->get('Donor_City'),
          'Donor_County' => $request->get('Donor_County'),
          'Donor_Country' => $request->get('Donor_Country')
        ]);

        $user->save();
        return redirect('/user');
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
        $user = User::find($id);
        
        return view('user.edit', compact('user','id'));
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
        $user = User::find($id);
        $user->Donor_Title = $request->get('Donor_Title');
        $user->Donor_FirstName = $request->get('Donor_FirstName');
        $user->Donor_LastName = $request->get('Donor_LastName');
        $user->Donor_Gender = $request->get('Donor_Gender');
        $user->Donor_EthnicOrigin = $request->get('Donor_EthnicOrigin');
        $user->Donor_Landline = $request->get('Donor_Landline');
        $user->Donor_Mobile = $request->get('Donor_Mobile');
        $user->Donor_Postcode = $request->get('Donor_Postcode');
        $user->Donor_House_Number = $request->get('Donor_House_Number');
        $user->Donor_Address_line1 = $request->get('Donor_Address_line1');
        $user->Donor_Address_line2 = $request->get('Donor_Address_line2');
        $user->Donor_Town = $request->get('Donor_Town');
        $user->Donor_City = $request->get('Donor_City');
        $user->Donor_County = $request->get('Donor_County');
        $user->Donor_Country = $request->get('Donor_Country');
        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $user = User::find($id);
      $user->delete();

      return redirect('/user');
    }
}
