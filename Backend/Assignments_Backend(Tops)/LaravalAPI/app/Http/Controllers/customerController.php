<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Alert;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
	
	function login()
	{
		return view('website/login'); 
	}
	
	function login_auth(Request $request)
	{
		$data=customer::where('email','=',$request->email)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				// session create
				session()->put('userid',$data->id);
				session()->put('name',$data->name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('/login');
			}
			else
			{
				Alert::error('Failed', 'Wrong Password ');
				return redirect()->back();	
			}
		}
		
	}
	
	function logout()
	{
		// session delete
		session()->pull('userid');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
		
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$data=country::all();
        return view('website/signup',['country'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new customer;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->phonenumber=$request->phonenumber;
		$data->address=$request->address;
		$data->gender=$request->gender;
		
		$file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->GetClientOriginalExtension();
        $file->move('/upload/customer',$filename);
        $file=$data->file=$filename;
		
		$data->language=implode(",",$request->language);
		$data->cid=$request->cid;
		
		$data->save();
		Alert::success('Congrats','You\'ve Successfully Registered');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data=customer::all();
        return view('admin/manage_cust',['data_customer'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        // get id data img
		$data=customer::find($id);  // get only one data in string 
		$filename=$data->file;
		
		// data delete with unlink image
        customer::find($id)->delete();
		if($filename!="")
		{
			unlink('/upload/customer'.$filename);
		}
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
		return redirect()->back();
    }
}
