<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcometech');
});

Route::get('office_masters',[App\Http\Controllers\OfficeMasterController::class,'index']);
Route::post('office_masters',[App\Http\Controllers\OfficeMasterController::class,'index']);

Route::get('tran_tables',[App\Http\Controllers\TranTableController::class,'index']);
Route::post('tran_tables',[App\Http\Controllers\TranTableController::class,'index']);

