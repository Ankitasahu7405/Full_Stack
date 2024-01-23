<?php

namespace App\Http\Controllers;

use App\Models\registration;
use App\Models\role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class registrationController extends Controller
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
		$data=registration::where('Email','=',$request->Email)->first();
		if($data)
		{
			if(Hash::check($request->Password,$data->Password))
			{
				// session create
				session()->put('userid',$data->id);
				session()->put('Name',$data->Name);
				
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
		session()->pull('Name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/healthify');
		
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
    public function show(registration $registration)
    {
        $data=registration::all();
        return view('admin/view-pateints',['data_registration'=>$data]);
    }
	
	public function ashow(registration $registration)
    {
        $data=registration::all();
        return view('admin/view-doctors',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registration $registration)
    {
     
    }
}
