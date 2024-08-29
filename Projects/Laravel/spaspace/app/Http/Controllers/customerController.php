<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Alert;
use session;

//Mail
use App\Mail\welcomeemail;
use Mail;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=customer::all();// get all country data from model
        return view('Admin/Manage_cust',["arr_customers"=>$data]);
    }
	
	function login()
	{
		return view('Website/login'); 
	}
	
	function login_auth(Request $request)
	{
		 $validated = $request->validate([
             'email' => 'required',
             'password' => 'required',
         ]);
		  $email=$request->email;
		  
		$data=customer::where('email','=',$request->email)->first();
		if($data)
        {
            $chk=Hash::check($request->password,$data->password);
			if($chk)
            {
                // session  create
                session()->put('id', $data->id);   
                session()->put('name', $data->name); 
                
                // session('email') use
                // session()->pull('id') delete

                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('/index');
            }
            else
            {
                Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Password');
                return redirect('/login');
            }
        }
        else
        {
            Alert::error('Failed', 'You\'ve Login Failed Due to Wrong Email');
            return redirect('/login');
        }
    }
	
	function userlogout()
	{
		// session delete
		session()->pull('id');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');		
	}
	
	function change_pass()
	{
		return view('Website/change_pass'); 
	}
	
	function pass_auth(Request $request)
	{
		 $validated = $request->validate([
             'password' => 'required',
             'new_password' => 'required',
         ]);
		 
		 $password=$request->password;
		 $new_password=$request->new_password;
		  
		 $data=customer::find(session(id));
		
		 if($data->passsword==$password)
		 {
			$data->passsword=$new_password;
			$data->update();
			
			Alert::success('Congrats', 'You\'ve Successfully Changed Password');
            return redirect('/profile');	
		 }
		 else
		 {
			Alert::error('Failed', 'You\'ve Wrong Passsword');
			return redirect('/change_pass');
		 }
    }
	
	function Email_pass()
	{
		return view('Website/Email_pass'); 
	}
	
	function forgot_pass(Request $request)
	{
		 $validated = $request->validate([
             'email' => 'required|unique:customers',
         ]);
		 
		
		  
		 if($data)
		 {
			$chk=check($request->email,$data->email);
			if($chk)
			{
				$email=$data->email=$request->email;
				$OTP=rand(1000000,999999)
			
				

				$data=array("email"=>$email,"name"=>$name);
				Mail::to($email)->send(new OTPMail($OTP));
			
				Alert::success('Congrats', 'You\'ve S ');
				return redirect('/forgot_pass');
			}
			else
			{
                Alert::error('Failed', 'You\'ve Enter Wrong Email');
                return redirect('/login');
			}
			
		 }
		 else
		 {
			Alert::error('Failed', 'You\'ve Wrong Email');
			return redirect('/login');
		 }
    }
	
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=country::all();
		return view('Website/signup',['country'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		
		$validated = $request->validate([
            'name' => 'required|alpha:ascii|max:255',
            'email' => 'required|unique:customers',
            'password' => 'required|min:8|max:12',
            'mobile' => 'required|digits:10',
			'address' => 'required',
            'cid' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
		
        $data=new customer;
	$name=$data->name=$request->name;
	$email=$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		
		$file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->GetClientOriginalExtension();
        $file->move('/views/upload/customer',$filename);
        $file=$data->file=$filename;
		
		$data->cid=$request->cid;
		$data->save();

        $data=array("email"=>$email,"name"=>$name,"password"=>$request->password);
        Mail::to($email)->send(new welcomeemail($data));
		
		Alert::success('Congrats','You\'ve Successfully Registered');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
		//$data=customer::where('id','=',session('id'))->fisrt(); // find direct by column in arr or single
		
        $data=customer::find(session('id')); // find direct by id in single data
        return view('Website/profile',["fetch"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer,$id)
    {
        $country=country::all();
        $data=customer::find($id);
        return view('Website/Edit_profile',["arr_countries"=>$country,"fetch"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,customer $customer,$id)
    {
        $data=customer::find($id);
		echo $data->file;
		exit();
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=$request->password;
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		$data->cid=$request->cid;
		//$data->file=$request->file;
		
		//img upload
			
		/*if($request->hasFile('file'))
		{
			$old_img=$data->file;
			
			$file=$request->file('file');	
			$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
			$file->move('upload/customer/',$filename);  // use move for move image in public/images
			$data->file=$filename; // name store in db
			
			
			unlink('upload/customer/'.$old_img);
		}*/
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Update Your Data');
		return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer,$id)
    {
        $data=customer::find($id); // find only id data from table
        $data->delete();

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/Manage_cust'); 
    }
}
