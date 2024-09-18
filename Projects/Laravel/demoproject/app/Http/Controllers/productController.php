<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;

class productController extends Controller
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
       return view('Admin/Add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prod_name' => 'required',
            'prod_desc' => 'required',
			'prod_price' => 'required',
            'prod_qunt' => 'required'
			
        ]);
		
        $data=new product;
		$data->prod_name=$request->prod_name;
		$data->prod_desc=$request->prod_desc;
		$data->prod_price=$request->prod_price;
		$data->prod_qunt=$request->prod_qunt;
		
		$data->save();
		
		Alert::success('Congrats','You\'ve Successfully Add Data');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
		$data=product::all(); //get all product data from model
        return view('Admin/manage_prod',["data_product"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $data=product::find($id);
        return view('Admin/edit_product',["data_product"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
		$validated = $request->validate([
            'prod_name' => 'required',
            'prod_desc' => 'required',
			'prod_price' => 'required',
            'prod_qunt' => 'required'
			
        ]);
		
        $data=product::find($id);
		$data->prod_name=$request->prod_name;
		$data->prod_desc=$request->prod_desc;
		$data->prod_price=$request->prod_price;
		$data->prod_qunt=$request->prod_qunt;
		
		$data->save();
		Alert::success('Congrats', 'You\'ve Successfully Update Your Data');
		return redirect('/manage_prod');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product,$id)
    {
        $data=product::find($id); // find only id data from table
        $data->delete();

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/manage_prod'); 
    }
}
