<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;

use Alert;

class registerController extends Controller
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
		$data=role::all();
        return view('website/signup',['role'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$data=new registration;
        $data->Name=$request->Name;
		$data->Email=$request->Email;
		$data->Password=Hash::make($request->Password);
		$data->Mobile=$request->Mobile;
		$data->Address=$request->Address;
		$data->Gender=$request->Gender;
		
		$file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientoriginalExtension();
        $file->move('/upload/register/',$filename);
        $data->file=$filename;
		
		$data->R_id=$request->R_id;
		
		$data->save();
		Alert::success('Congrats','You\'ve Successfully Registered');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
