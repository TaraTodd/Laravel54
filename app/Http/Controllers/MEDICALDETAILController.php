<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalDetails;

class MEDICALDETAILController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$medicaldetails = MedicalDetails::all()->toArray();
        
        return view('medicaldetail.index', compact('medicaldetails'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('medicaldetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicaldetail = new MedicalDetails([
          'DonorID' => $request->get('DonorID'),
          'BloodGroup' => $request->get('BloodGroup'),
          'BloodPressure' => $request->get('BloodPressure'),
          'Smoker' => $request->get('Smoker'),
          'Medication' => $request->get('Medication'),
          'BloodTotal' => $request->get('BloodTotal')
        ]);

        $medicaldetail->save();
        return redirect('/medicaldetail');
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

        $medicaldetail = MedicalDetails::find($id);
        
        return view('medicaldetail.edit', compact('medicaldetail','id'));
        
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
        
    	$medicaldetail = MedicalDetails::find($id);
        $medicaldetail->DonorID = $request->get('DonorID');
        $medicaldetail->BloodGroup = $request->get('BloodGroup');
        $medicaldetail->BloodPressure = $request->get('BloodPressure');
        $medicaldetail->Smoker = $request->get('Smoker');
        $medicaldetail->Medication = $request->get('Medication');
        $medicaldetail->BloodTotal = $request->get('BloodTotal');
        $medicaldetail->save();
        return redirect('/medicaldetail');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      $medicaldetail = MedicalDetails::find($id);
      $medicaldetail->delete();

      return redirect('/medicaldetail');
        
    }
}
