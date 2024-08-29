<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', function () {
    return view('Website/index');
});

Route::get('/index', function () {
    return view('Website/index');
});

Route::get('/about', function () {
    return view('Website/about');
});

Route::get('/services', function () {
    return view('Website/services');
});

Route::get('/contact', [contactController::class,'create']);
Route::post('/contact', [contactController::class,'store']);

Route::get('/signup', [customerController::class,'create']);
Route::post('/signup', [customerController::class,'store']);

Route::get('/login', [customerController::class,'login']);
Route::post('/login_auth', [customerController::class,'login_auth']);
Route::get('/userlogout', [customerController::class,'userlogout']);

Route::get('/change_pass', [customerController::class,'change_pass']);
Route::post('/pass_auth', [customerController::class,'pass_auth']);

Route::get('/Email_pass', [customerController::class,'Email_pass']);
Route::post('/forgot_pass', [customerController::class,'forgot_pass']);

Route::get('/profile',[customerController::class,'show']);
Route::get('/profile/{id}',[customerController::class,'edit']);
Route::post('/updateprofile/{id}',[customerController::class,'update']);



//============================================== Website End ==============================================


//============================================== Admin Start ==============================================



Route::get('/Admin_login',[AdminController::class,'Admin_login']);
Route::post('/admin_auth',[AdminController::class,'admin_auth']);	
Route::get('/adminlogout',[AdminController::class,'adminlogout']);
	
Route::get('/Add_cate',[CategoryController::class,'store']);
Route::get('/Manage_cate',[CategoryController::class,'show']);
Route::get('/Manage_cate/{cate_id}',[CategoryController::class,'destroy']);

Route::get('/Add_serv',[ServiceController::class,'store']);
Route::get('/Manage_serv',[ServiceController::class,'show']);
Route::get('/Manage_serv/{serv_id}',[ServiceController::class,'destroy']);

Route::get('/Manage_cust',[customerController::class,'index']);
Route::get('/Manage_cust/{id}',[customerController::class,'destroy']);

Route::get('/Manage_cont',[contactController::class,'show']);
Route::get('/Manage_cont/{id}',[contactController::class,'destroy']);
	
Route::get('/dashboard', function () {
	return view('Admin/dashboard');
});

Route::get('/blank', function () {
	return view('Admin/blank');
});

//============================================== Admin End ================================================
