<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serv_nm' => 'required|alpha:ascii|max:255',
            'price' => 'required',
			'desc' => 'required',
            'cate_id' => 'required',
            'serv_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
		
        $data=new service;
		$data->serv_nm=$request->serv_nm;
		$data->desc=$request->desc;
		$data->price=$request->price;
		
		$file=$request->file('serv_image');
        $filename=time().'_img.'.$request->file('serv_image')->GetClientOriginalExtension();
        $file->move('/views/upload/service',$filename);
        $file=$data->file=$filename;
		
		$data->cate_id=$request->cate_id;
		
		$data->save();
		
		Alert::success('Congrats','You\'ve Successfully Add Data');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
       $data=service::all();// get all country data from model
        return view('Admin/Manage_serv',["arr_services"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service,$serv_id)
    {
        $data=service::find($serv_id); // find only id data from table
        $data->delete();

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/Manage_serv'); 
    }
}
