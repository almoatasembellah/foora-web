<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GamesController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'] , static function (){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('update-profile', [AuthController::class, 'updateProfile']);
    Route::post('change-password' , [AuthController::class , 'changePassword']);

    Route::post('upload-profile-image', [ProfileController::class, 'uploadProfileImage']);
    Route::get('profile', [ProfileController::class, 'show']);
    Route::delete('delete-profile-image', [ProfileController::class, 'deleteProfileImage']);
});
Route::get('get-cities' , [GeneralController::class , 'getALlCities']);
Route::get('city/{city_id}/areas' , [GeneralController::class , 'getCityAreas']);
Route::apiResource('games', GamesController::class);
