<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeJoinStatusRequest;
use App\Http\Requests\JoinGameRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Resources\GameJoinResource;
use App\Http\Resources\JoinedPlayersResource;
use App\Http\Resources\GameResource;
use App\Http\Resources\JoinsResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use App\Models\JoinedPlayer;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;


class JoinedPlayersController extends Controller
{
    use HandleApi;

    public function joinGame(JoinGameRequest $request)
    {
        $isAlreadyJoinGame = (bool)JoinedPlayer::where(['user_id' => $request->user()->id, 'game_id' => $request->get('game_id')])->first();
        $gameCreator = Game::where(['user_id' => $request->user()->id, 'id' => $request->get('game_id')])->first();
        if ($gameCreator) {
            return $this->sendError("Game join Error", 'You can\'t join this game');
        }
        if (!$isAlreadyJoinGame) {
            JoinedPlayer::create([
                'user_id' => $request->user()->id,
                'game_id' => $request->get('game_id')
            ]);
            return $this->sendResponse([], "Game is joined successfully");
        }
        return $this->sendError("Game join Error", "Game is already joined");
    }

    public function getGameJoins(Request $request, $gameId)
    {
        $game = Game::where('id', $gameId)->first();
        if ($game->user_id !== $request->user()->id) {
            $joinedGames = JoinedPlayer::with('game')->where(['game_id' => $gameId, 'user_id' => $request->user()->id])->get();
            return $this->sendResponse(['games' => JoinsResource::collection($joinedGames)], "All Joined Games are fetched successfully");

        }
        $joinedPlayers = JoinedPlayer::with(['user', 'game'])->where('game_id', $gameId)->get();
        return $this->sendResponse(['game' => GameResource::make($game), 'players' => JoinedPlayersResource::collection($joinedPlayers)], "All Joins on your game is fetched successfully");

    }

    public function changeStatus(ChangeJoinStatusRequest $request)
    {
        $game = Game::where('id', $request->get('game_id'))->first();
        if ($game->user_id === $request->user()->id) {
            if ($request->get('status') == 1) {
                $game->players_number = $game->players_number - 1;
                $game->save();
            }

            JoinedPlayer::where(['game_id' => $request->get('game_id'), 'user_id' => $request->get('user_id')])->update([
                'status' => $request->get('status')
            ]);
            return $this->sendResponse([], "Join Status is changed successfully");
        }
        return $this->sendError("Game join Error", 'You don\'t have permission to change join status');
    }
}
