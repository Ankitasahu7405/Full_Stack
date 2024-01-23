<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Alert;

class appointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$data=department::all();
		return view('website/appointment',['department'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new appointment;
        $data->Name=$request->Name;
		$data->Email=$request->Email;
		$data->Date=$request->Date;
		$data->Time=$request->Time;
		
		$data->D_Id=$request->D_Id;
		
		$data->save();
		Alert::success('Congrats','You\'ve Successfully Booked');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(appointment $appointment)
    {
        $data=appointment::all();
        return view('admin/manage_appointment',['data_appointment'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointment $appointment,$id)
    {
        // get id data img
		$data=appointment::find($id);  // get only one data in string 
		$filename=$data->file;
		
		// data delete with unlink image
        appointment::find($id)->delete();
		if($filename!="")
		{
			unlink('/upload/register/'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
		return redirect()->back();
    }
}
