<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'Show']);
Route::get('/profile', [ProfileController::class, 'Show'])->middleware('auth');
Route::get('product/{id}', [ProductController::class, 'ShowProduct'])->middleware('auth');   
Route::post('/', [ProductController::class, 'Order']);
Route::post('/profile', [ProfileController::class, 'UpdateStatus'])->middleware('auth');   

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/registration', [RegisterController::class, 'authenticate']);
Route::view('/login',"AuthPage")->name("login");
Route::view('/registration',"RegistrationPage");
Route::get('logout', [LoginController::class, 'logout']);
