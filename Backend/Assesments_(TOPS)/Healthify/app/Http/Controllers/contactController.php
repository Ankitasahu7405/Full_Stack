<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Alert;

class contactController extends Controller
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
        return view('website/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new contact;
		$data->name=$request->Name;
		$data->email=$request->Email;
		$data->subject=$request->Subject;
		$data->message=$request->Message;
		
		$data->save();
		Alert::success('Done');
		return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
