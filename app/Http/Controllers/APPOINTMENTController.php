<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;


class APPOINTMENTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all()->toArray();
        
        return view('appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    	return view('appointment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    	$appointment = new Appointment([
          'Appointment_Date' => $request->get('Appointment_Date'),
          'Appointment_Time' => $request->get('Appointment_Time'),
          'Appointment_Day' => $request->get('Appointment_Day'),
          'Appointment_Duration' => $request->get('Appointment_Duration')
        ]);

        $appointment->save();
        return redirect('/appointment');

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

    	$appointment = Appointment::find($id);
        
        return view('appointment.edit', compact('appointment','id'));


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

    	$appointment = Appointment::find($id);
        $appointment->Appointment_Date = $request->get('Appointment_Date');
        $appointment->Appointment_Time = $request->get('Appointment_Time');
        $appointment->Appointment_Day = $request->get('Appointment_Day');
        $appointment->Appointment_Duration = $request->get('Appointment_Duration');
        $appointment->save();
        return redirect('/appointment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $appointment = Appointment::find($id);
      $appointment->delete();

      return redirect('/appointment');
        
    }
}
