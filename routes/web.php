<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoverController;
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
Route::get('/',[CoverController::class,'cover']);
Route::get('/contact',[CoverController::class,'contact']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/signin',[AuthController::Class,'login'])->name('signin');
Route::get('/signup',[AuthController::Class,'register']);
Route::post('/signin',[AuthController::Class,'loginUser']);
Route::post('/signup',[AuthController::Class,'registerUser']);
Route::get('/logout',[AuthController::Class,'logoutUser']);