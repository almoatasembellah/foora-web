<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\JoinGameRequest;
use App\Http\Resources\GameJoinsResource;
use App\Http\Traits\HandleApi;
use App\Models\JoinedPlayer;
use function GuzzleHttp\Promise\all;


class JoinedPlayersController extends Controller
{
    use HandleApi;

    public function joinGame(JoinGameRequest $request)
    {
        $isAlreadyJoinGame = (bool)JoinedPlayer::where(['user_id' => $request->user()->id, 'game_id' => $request->get('game_id')])->first();
        if (!$isAlreadyJoinGame) {
            JoinedPlayer::create([
                'user_id' => $request->user()->id,
                'game_id' => $request->get('game_id')
            ]);
            return $this->sendResponse([], "Game is joined successfully");
        }
        return $this->sendError("Game join Error", "Game is already joined Found");
    }

    public function getGameJoins(){
        $joinedPlayers = JoinedPlayer::with(['game', 'user'])->get();

        return GameJoinsResource::collection($joinedPlayers);

    }
}
