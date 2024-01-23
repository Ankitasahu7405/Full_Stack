<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/index');
    }
	
	function login_auth(Request $request)
	{
		$data=admin::where('username','=',$request->username)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				// session create
				session()->put('adminid',$data->id);
				session()->put('adminname',$data->username);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::Success('Congrats', 'You\'ve Successfully Login');
				return redirect('/dashboard');
			}
			else
			{
				Alert::Error('Failed', 'Wrong Password');
				return redirect()->back();	
			}
		}
		else
		{
			Alert::Error('Failed', 'Wrong Email ');
			return redirect()->back();
		}
		
	}
	
	function logout()
	{
		// session delete
		session()->pull('adminid');
		session()->pull('adminname');
		
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/admin-login');
		
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

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
