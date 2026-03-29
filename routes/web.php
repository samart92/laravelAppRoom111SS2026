<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "<h1>Hello laravel</h1>";
});

Route::resource('/product',ProductController::class);

// Route::get('/product',[ProductController::class,'index']);
