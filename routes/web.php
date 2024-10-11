<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'Show']);
Route::get('product/{id}', [ProductController::class, 'ShowProduct']);     
Route::post('/', [ProductController::class, 'Order']);