<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Alert;
use session;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
	
	public function Admin_login()
    {
        return view('Admin/Admin_login');
    }

    public function admin_auth(Request $request)
    {
        $validated = $request->validate([
             'username' => 'required',
             'password' => 'required',
         ]);
         
        $username=$request->username;

        $data=admin::where('username','=',$username)->first(); 
        if($data)
        {
            $chk=Hash::check($request->password,$data->password);
			if($chk)
            {
                // session  create
                session()->put('aid', $data->aid);   
                session()->put('aname', $data->aname); 
                session()->put('username', $data->username);
                
                // session('email') use
                // session()->pull('id') delete

                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('/dashboard');
            }
            else
            {
                Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Password');
                return redirect('/Admin_login');
            }
        }
        else
        {
            Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Email');
            return redirect('/Admin_login');
        }
    }

   
    public function adminlogout()
    {
        // delete
        session()->pull('aid'); //session()->pull('id');
        session()->pull('aname');
        session()->pull('username');
        Alert::success('Congrats', 'You\'ve Logout Successfully');
        return redirect('/Admin_login');
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
        //
    }

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
