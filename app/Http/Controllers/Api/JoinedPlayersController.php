<?php

namespace App\Http\Controllers\Api;

use App\Constants\JoinStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Join\CancelJoinRequest;
use App\Http\Requests\Api\Join\ChangeJoinStatusRequest;
use App\Http\Requests\Api\Join\JoinGameRequest;
use App\Http\Resources\Api\JoinsResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use App\Models\JoinedPlayer;
use Illuminate\Http\Request;


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
        if ($game->user_id == $request->user()->id) {

            JoinedPlayer::where(['game_id' => $request->get('game_id'), 'user_id' => $request->get('user_id')])->update([
                'status' => $request->get('status')
            ]);
            return $this->sendResponse([], "Join Status is changed successfully");
        }
        return $this->sendError("Game join Error", 'You don\'t have permission to change join status');
    }

    public function getPlayerJoinedGames(Request $request)
    {
        $joinedGames = JoinedPlayer::with(['game' , 'user'])->where('user_id' , $request->user()->id)->where('status' , JoinStatus::APPROVED)->get();
        return $this->sendResponse(JoinsResource::collection($joinedGames), "All Joined Games are fetched successfully");
    }

    public function cancelJoin(CancelJoinRequest $request)
    {
        JoinedPlayer::where(['user_id' => $request->get('user_id'), 'game_id' => $request->get('game_id')])->delete();
        return $this->sendResponse([], "Join is cancelled successfully");
    }
}
