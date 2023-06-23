<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GamesController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\JoinedPlayersController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ScouterController;
use App\Http\Controllers\Api\StadiumController;
use App\Http\Controllers\Api\VenueController;
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

Route::post('player/login', [AuthController::class, 'playerLogin']);
Route::post('scouter/login', [AuthController::class, 'scouterLogin']);
Route::post('venue/login', [AuthController::class, 'venueLogin']);

Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], static function () {

//Auth routes
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('update-profile', [ProfileController::class, 'update']);
    Route::post('change-password', [AuthController::class, 'changePassword']);

//Profile Routes
    Route::post('upload-profile-image', [ProfileController::class, 'uploadProfileImage']);
    Route::get('profile', [ProfileController::class, 'show']);
    Route::delete('delete-profile-image', [ProfileController::class, 'deleteProfileImage']);


//Game Routes
    Route::post('create-game', [GamesController::class, 'createGame']);
    Route::put('update-game/{id}', [GamesController::class, 'update']);
    Route::delete('delete-game/{id}', [GamesController::class, 'destroy']);
    Route::post('search-games', [GamesController::class, 'searchGames']);
    Route::get('get-created-games', [GamesController::class, 'getCreatedGames']);
    Route::post('get-competitive-games', [GamesController::class, 'getCompetitiveGames']);
    Route::get('get-specific-game/{id}', [GamesController::class, 'getSpecificGame']);


//Join Routes
    Route::post('join-game', [JoinedPlayersController::class, 'joinGame']);
    Route::get('get-all-joins', [JoinedPlayersController::class, 'getGameJoins']);
    Route::post('game/join/change-status', [JoinedPlayersController::class, 'changeStatus']);
    Route::get('get-player-joined-games', [JoinedPlayersController::class, 'getPlayerJoinedGames']);
    Route::post('cancel-join', [JoinedPlayersController::class, 'cancelJoin']);

//Stadium Routes
    Route::post('search-stadiums', [StadiumController::class, 'searchStadiums']);
    Route::group(['prefix' => 'venue'] , function (){
        Route::get('get-stadium', [VenueController::class, 'getStadium']);
        Route::put('update-stadium', [VenueController::class, 'updateStadium']);
        Route::post('upload-stadium-image', [VenueController::class, 'uploadStadiumImage']);
        Route::get('stadium-hours/{stadiumId}', [VenueController::class, 'getStadiumHours']);
        Route::post('add-stadium-hours', [VenueController::class, 'addStadiumHours']);
        Route::delete('delete-stadium-hours/{hourId}', [VenueController::class, 'deleteStadiumHours']);

    });

//Scouter Routes
    Route::post('scoute-player', [ScouterController::class, 'scoutePlayer']);
    Route::get('get-scouted-match', [ScouterController::class, 'getScoutedMatch']);
});

Route::get('get-cities', [GeneralController::class, 'getALlCities']);
Route::get('city/{city_id}/areas', [GeneralController::class, 'getCityAreas']);
Route::get('get-leader-board' , [GeneralController::class , 'getLeaderBoard']);
