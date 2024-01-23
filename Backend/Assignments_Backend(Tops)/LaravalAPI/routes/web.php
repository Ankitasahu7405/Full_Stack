<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;

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

Route::get('/travel', function () {
    return view('website/index');
});

Route::get('/about', function () {
    return view('website/about');
});

Route::get('/service', function () {
    return view('website/service');
});

Route::get('/blog', function () {
    return view('website/blog');
});

Route::get('/contact', [contactController::class,'create']);
Route::post('/contact', [contactController::class,'store']);

Route::get('/guide', function () {
    return view('website/guide');
});

Route::get('/package', function () {
    return view('website/package');
});

Route::get('/destination', function () {
    return view('website/destination');
});

Route::get('/single', function () {
    return view('website/single');
});

Route::get('/testimonial', function () {
    return view('website/testimonial');
});

Route::get('/login',[customerController::class,'login']);
Route::post('/login_auth',[customerController::class,'login_auth']);

Route::get('/userlogout',[customerController::class,'logout']);

Route::get('/signup', [customerController::class,'create']);
Route::post('/signup', [customerController::class,'store']);

//====================================== End-User Panel ======================================

//====================================== Admin Panel ======================================

Route::get('/admin-login',[adminController::class,'index']);
Route::post('/alogin_auth',[adminController::class,'login_auth']);

Route::get('/adminlogout',[adminController::class,'logout']);


Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/manage_cust', [customerController::class,'show']);
Route::get('/Delete', [customerController::class,'destroy']);

Route::get('manage_pack', function () {
    return view('admin/manage_pack');
});

Route::get('/manage_cont', [contactController::class,'show']);
Route::get('/Delete', [contactController::class,'destroy']);

Route::get('manage_feed', function () {
    return view('admin/manage_feed');
});

Route::get('add_cust', function () {
    return view('admin/add_cust');
});

Route::get('add_pack', function () {
    return view('admin/add_pack');
});

Route::get('tab-panel', function () {
    return view('admin/tab-panel');
});


//====================================== End-Admin Panel ======================================