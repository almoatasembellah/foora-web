<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\GamesController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::group(['middleware' => 'auth:web'] , function (){
    Route::get('user-profile', [UserController::class, 'getProfile'])->name('get-profile');
    Route::get('change-password', [HomeController::class, 'changePassword'])->name('change-password');
    Route::post('change-password', [HomeController::class, 'updatePassword'])->name('update-password');
    Route::resource('games' , GamesController::class);
});
