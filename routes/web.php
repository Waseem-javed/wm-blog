<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
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
Route::middleware(['web'])->group(function(){

Route::get('/dashboard',function(){
    return view('home',['title'=>'Dashboard']);
});
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/signin',[AuthController::Class,'login']);
});