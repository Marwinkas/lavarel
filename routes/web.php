<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'show']);
Route::get('product/{id}', [ProductController::class, 'showCard']);     
Route::post('/', [ProductController::class, 'store']);