<?php

namespace App\Http\Controllers\Api;

use App\Constants\JoinStatus;
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
        $playersNeededCount = Game::where('id' , $request->get('game_id'))->value('players_number');
        $joinedPlayersCount = JoinedPlayer::where( 'game_id' , $request->get('game_id'))->count();
        if (!$isAlreadyJoinGame) {
           if ($joinedPlayersCount < $playersNeededCount){
               JoinedPlayer::create([
                   'user_id' => $request->user()->id,
                   'game_id' => $request->get('game_id')
               ]);
               return $this->sendResponse([], "Game is joined successfully");
           }else{
               return $this->sendError("Game join Error", "You can\'t join this game");
           }
        }
        return $this->sendError("Game join Error", "Game is already joined");
    }

    public function getGameJoins(Request $request)
    {

        $games = Game::where('user_id' , $request->user()->id)->get();
        $joinedGames = JoinedPlayer::with(['game' , 'user'])->whereIn('game_id' , $games->pluck('id'))->where('status' , JoinStatus::PENDING)->get();
        return $this->sendResponse(JoinsResource::collection($joinedGames), "All Joined Games are fetched successfully");

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
