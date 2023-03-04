<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Http\Requests\SearchGameRequest;
use App\Http\Resources\GameResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    use HandleApi;

    public function searchGames(SearchGameRequest $request)
    {
        $games = Game::where('user_id' , '!=' , $request->user()->id)
            ->where(['area_id' => $request->get('area_id') , 'city_id' => $request->get('city_id')])->get();
        return $this->sendResponse(GameResource::collection($games) , 'Game list is fetched successfully');
    }
    public function getRequestedGames(Request $request)
    {
        $games = Game::where('user_id' , $request->user()->id)->get();
        return $this->sendResponse(GameResource::collection($games) , 'Game list is fetched successfully');
    }

    public function createGame(GameRequest $request)
    {
        $existGame = Game::where($request->validated())->first();
        if ($existGame){
            return $this->sendError("Game Create Error", "This game is already created");
        }
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;
        $game = Game::create($data);
        return $this->sendResponse(GameResource::make($game) , 'Game is requested successfully');
    }


    public function update(GameRequest $request,$id)
    {
        $game = Game::where(['id' => $id , 'user_id' => $request->user()->id])->first();
        if ($game ){
        $game->update($request->all());
        return $this->sendResponse([],"Game updated successfully");
        }
        return $this->sendError("Game Update Error", "Game Not Found");
    }

    public function destroy(Request $request ,$id)
    {
        $game = Game::where(['id' => $id , 'user_id' => $request->user()->id])->first();
        if ($game ){
            $game->delete();
            return $this->sendResponse([],"Game Deleted successfully");
        }
        return $this->sendError("Game Delete Error", "Game Not Found");
    }
}
