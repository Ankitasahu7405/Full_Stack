<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\appointmentController;
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

Route::get('/healthify', function () {
    return view('website/index');
});

Route::get('/about', function () {
    return view('website/about');
});

Route::get('/service', function () {
    return view('website/service');
});

Route::get('/contact', [contactController::class,'create']);
Route::post('/contact', [contactController::class,'store']);

Route::get('/search', function () {
    return view('website/search');
});

Route::get('/team', function () {
    return view('website/team');
});

Route::get('/blog', function () {
    return view('website/blog');
});

Route::get('appointment',[appointmentController::class,'create']);
Route::post('appointment',[appointmentController::class,'store']);

Route::get('/signup',[registrationController::class,'create']);
Route::post('/signup',[registrationController::class,'store']);

Route::get('/login',[registrationController::class,'login']);
Route::post('/login_auth',[registrationController::class,'login_auth']);

Route::get('/userlogout',[registrationController::class,'logout']);

//====================================== End-User Panel ===================================

//====================================== Admin Panel ======================================

Route::get('/admin-login',[adminController::class,'index']);
Route::post('/alogin_auth',[adminController::class,'login_auth']);

Route::get('/adminlogout',[adminController::class,'logout']);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('view-doctors', function () {
    return view('admin/view-doctors');
});

Route::get('view-pateints',[registrationController::class,'show']);
  
Route::get('manage_appointment',[appointmentController::class,'show']);
Route::get('/delete/{id}',[appointmentController::class,'destroy']);

Route::get('tab-panel', function () {
    return view('admin/tab-panel');
});


//====================================== End-Admin Panel ======================================