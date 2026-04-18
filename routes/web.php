<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "<h1>Hello laravel</h1>";
})->name('home.index');

Route::resource('/product',ProductController::class);

Route::resource('cat',CategoryController::class);
