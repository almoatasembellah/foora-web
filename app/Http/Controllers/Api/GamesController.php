<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateGameRequest;
use App\Http\Resources\GameResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    use HandleApi;

    public function createGame(CreateGameRequest $request)
    {
        $game = Game::create($request->validated());
        return $this->sendResponse(GameResource::make($game) , 'Game is requested successfully');
    }
}
