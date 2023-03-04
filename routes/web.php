<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\Web\GameController;
use App\Http\Controllers\Web\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/user-profile', [ProfileController::class, 'show'])->name('get-profile');
Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('show-edit-profile');
Route::post('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');

Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');
Route::resource('games', GameController::class);
Route::resource('venues', VenueController::class);
Route::resource('stadiums', StadiumController::class);
