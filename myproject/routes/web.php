<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::resource('pages', PageController::class);
Route::resource('products', ProductController::class);




Route::get('/', function () {
    return view('welcome');
});
