<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

	
Route::get('/index', function () {
    return view('website/index');
});

Route::get('about', function () {
    return view('website/about');
});

Route::get('gallery', function () {
    return view('website/gallery');
});

Route::get('services', function () {
    return view('website/services');
});

Route::get('contact', function () {
    return view('website/contact');
});

Route::get('login', function () {
    return view('website/login');
});

Route::get('signup', function () {
    return view('website/signup');
});

//======================Website/Template==========================


//=======================Admin Panel===============================


Route::get('/ad-dashboard', function () {
    return view('admin/dashboard');
});

Route::get('manage_cust', function () {
    return view('admin/manage_cust');
});

Route::get('manage_cate', function () {
    return view('admin/manage_cate');
});

Route::get('manage_flav', function () {
    return view('admin/manage_flav');
});

Route::get('manage_cont', function () {
    return view('admin/manage_cont');
});

Route::get('manage_feed', function () {
    return view('admin/manage_feed');
});

Route::get('add_cust', function () {
    return view('admin/add_cust');
});

Route::get('add_cate', function () {
    return view('admin/add_cate');
});

Route::get('add_flav', function () {
    return view('admin/add_flav');
});

Route::get('tab-panel', function () {
    return view('admin/tab-panel');
});


//=======================End-Admin Panel===============================

//=======================Employee Panel===============================

Route::get('/ep-dashboard', function () {
    return view('employee/dashboard');
});

Route::get('manage_cust', function () {
    return view('employee/manage_cust');
});

Route::get('manage_cate', function () {
    return view('employee/manage_cate');
});

Route::get('manage_flav', function () {
    return view('employee/manage_flav');
});

Route::get('manage_cont', function () {
    return view('employee/manage_cont');
});

Route::get('manage_feed', function () {
    return view('employee/manage_feed');
});

Route::get('add_cust', function () {
    return view('employee/add_cust');
});

Route::get('add_cate', function () {
    return view('employee/add_cate');
});

Route::get('add_flav', function () {
    return view('employee/add_flav');
});

Route::get('tab-panel', function () {
    return view('employee/tab-panel');
});