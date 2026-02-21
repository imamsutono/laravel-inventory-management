<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::prefix('master')->name('master.')->group(function () {
        Route::resource('product-category', ProductCategoryController::class);
    });
});
