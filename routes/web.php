<?php

use App\Http\Controllers\Auth\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user-profile', [\App\Http\Controllers\Web\UserController::class, 'getProfile'])->name('get-profile');
