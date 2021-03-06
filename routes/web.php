<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'registerUser']);

Route::get('/products',[ProductController::class,'allProduct']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('/addToCart',[ProductController::class,'addToCart']);
Route::get('/search',[ProductController::class,'search']);
Route::get('/cart',[ProductController::class,'cart']);
Route::get('/removeCart/{id}',[ProductController::class,'removeCart']);
Route::get('/editProduct/{id}',[ProductController::class,'editProduct']);
Route::post('/editProduct',[ProductController::class,'saveEdit']);