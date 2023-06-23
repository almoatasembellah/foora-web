<?php

namespace App\Http\Controllers\Api;

use App\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\RatePlayerRequest;
use App\Http\Requests\ValidateGameAttendanceRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Traits\HandleApi;
use App\Models\GameAttendance;
use App\Models\PlayerRate;
use App\Models\User;
use Illuminate\Http\Request;

class ScouterController extends Controller
{
    use HandleApi;

    public function attendGame(ValidateGameAttendanceRequest $request){
        $isGameAttended = (bool) GameAttendance::where('game_id' , $request->get('game_id'))->first();
        if ($isGameAttended){
            return $this->sendError('Attend Game error' , 'This game is already attended');
        }

        GameAttendance::create([
            'game_id' => $request->get('game_id'),
            'scouter_id' => $request->user()->id,
        ]);
        return $this->sendResponse([], 'you attend game successfully.');

    }
    public function scoutePlayer(RatePlayerRequest $request)
    {
        $isPlayerRated = (bool) PlayerRate::where(['player_id' => $request->get('player_id') , 'game_id' => $request->get('game_id') , 'scouter_id' => $request->user()->id])->first();
        if (strtolower($request->user()->role()->value('name')) !== strtolower(Roles::SCOUTER_TEXT)){
            return $this->sendError('Player rate error' , 'You don\'t have permission to rate this player');
        }
        if (!$isPlayerRated){
            $data = $request->validated();
            $data['scouter_id'] = $request->user()->id;
            PlayerRate::create($data);
            return $this->sendResponse([], 'you rate player successfully.');
        }
        return $this->sendError('Player rate error' , 'You are already rated this player');
    }

    public function getScoutedPlayers(Request $request)
    {
        $scoutedPlayersId = PlayerRate::where(['scouter_id' => $request->user()->id])->get()->pluck('player_id');
        $scoutedPlayersData = User::whereIn('id' , $scoutedPlayersId)->get();
        return $this->sendResponse(UserResource::collection($scoutedPlayersData), 'Scouted players fetched successfully.');
    }
}
