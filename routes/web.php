<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[RegController::class,'index'] );
Route::post('/demo',[RegController::class,'demo']);
Route::get('/Customer',function (){
    $customers=Customer::all();
//    print_r($customers->toArray());
});
Route::get('/reg',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer',[CustomerController::class,'view']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete']);
Route::get('/update/{id}',[CustomerController::class,'update']);
Route::post('/update_action/{id}',[CustomerController::class,'update_action']);
