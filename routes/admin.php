<?php

use App\Http\Controllers\Admin\AreasController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\GamesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\StadiumController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', static function () {return view('admin.home');})->name('home')->middleware('guest:admin');

Route::group([ 'as' => 'auth.'], static function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'submit'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => ['is-admin']], static function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('cities', CitiesController::class);
    Route::resource('areas', AreasController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('games', GamesController::class);
    Route::resource('stadiums', StadiumController::class);
    Route::resource('users', UserController::class);
});
