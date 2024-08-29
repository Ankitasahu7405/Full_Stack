<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
            'cate_nm' => 'required|alpha:ascii|max:255',
            'cate_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
		
        $data=new category;
		$data->cate_nm=$request->cate_nm;
		
		$file=$request->file('cate_image');
        $filename=time().'_img.'.$request->file('cate_image')->GetClientOriginalExtension();
        $file->move('/views/upload/category',$filename);
        $file=$data->file=$filename;
		
		$data->save();
		
		Alert::success('Congrats','You\'ve Successfully Add Data');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data=category::all();// get all country data from model
        return view('Admin/Manage_cate',["arr_categories"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$cate_id)
    {
        $data=category::find($cate_id); // find only id data from table
        $data->delete();

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect('/Manage_cate'); 
    }
}
