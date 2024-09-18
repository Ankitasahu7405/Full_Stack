<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\AdminController;

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

Route::get('/Admin_login',[AdminController::class,'Admin_login']);
Route::post('/admin_auth',[AdminController::class,'admin_auth']);	
Route::get('/adminlogout',[AdminController::class,'adminlogout']);

Route::get('/', function () {
    return view('Admin.dashboard');
});

Route::get('/Add_product',[productController::class,'create']);
Route::post('/Add_product',[productController::class,'store']);
Route::get('/manage_prod',[productController::class,'show']);
Route::get('/delete_prod/{id}',[productController::class,'destroy']);
Route::get('/edit_product/{id}',[productController::class,'edit']);
Route::post('/update_product/{id}',[productController::class,'update']);


