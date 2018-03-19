<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LOCATIONController extends Controller
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
        
    	$locations = Location::all()->toArray();
        
        return view('location.index', compact('locations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('location.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    	$location = new Location([
          'Location_Name' => $request->get('Location_Name'),
          'Location_Postcode' => $request->get('Location_Postcode'),
          'Location_Number' => $request->get('Location_Number'),
          'Location_Address1' => $request->get('Location_Address1'),
          'Location_Address2' => $request->get('Location_Address2'),
          'Location_Town' => $request->get('Location_Town'),
          'Location_City' => $request->get('Location_City'),
          'Location_County' => $request->get('Location_County'),
          'Location_County' => $request->get('Location_County'),
          'Location_Date' => $request->get('Location_Date'),
          'Location_Time' => $request->get('Location_Time'),
          'Location_Distance' => $request->get('Location_Distance'),
          'Location_Longtitude' => $request->get('Location_Longtitude'),
          'Location_Latitude' => $request->get('Location_Latitude'),
        ]);

        $location->save();
        return redirect('/location');

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

    	$location = Location::find($id);
        
        return view('location.edit', compact('location','id'));

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
        
    	$location = Location::find($id);
        $location->Location_Name = $request->get('Location_Name');
        $location->Location_Postcode = $request->get('Location_Name');
        $location->Location_Number = $request->get('Location_Name');
        $location->Location_Address1 = $request->get('Location_Name');
        $location->Location_Address2 = $request->get('Location_Name');
        $location->Location_Town = $request->get('Location_Name');
        $location->Location_City = $request->get('Location_Name');
        $location->Location_County = $request->get('Location_Name');
        $location->Location_County = $request->get('Location_Name');
        $location->Location_Date = $request->get('Location_Name');
        $location->Location_Time = $request->get('Location_Name');
        $location->Location_Distance = $request->get('Location_Name');
        $location->Location_Longtitude = $request->get('Location_Name');
        $location->Location_Latitude = $request->get('Location_Name');
        $location->save();
        return redirect('/location');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      $location = Location::find($id);
      $location->delete();

      return redirect('/location');
        
    }
}
