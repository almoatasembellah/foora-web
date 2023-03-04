<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Http\Resources\GameResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    use HandleApi;
    public function index()
    {
        $games = Game::all();
        return $this->sendResponse(GameResource::collection($games) , 'Game list is fetched successfully');
    }

    public function store(GameRequest $request)
    {
        $game = Game::create($request->validated());
        return $this->sendResponse(GameResource::make($game) , 'Game is requested successfully');
    }


    public function update(GameRequest $request,$id)
    {
        $game = Game::where('id',$id)->first();
        if ($game ){
        $game->update($request->all());
        return $this->sendResponse([],"Game updated successfully");
        }
        return $this->sendError("Game Update Error", "Game Not Found");
    }

    public function destroy($id)
    {
        $game = Game::where('id',$id)->first();
        if ($game ){
            $game->delete();
            return $this->sendResponse([],"Game Deleted successfully");
        }
        return $this->sendError("Game Delete Error", "Game Not Found");
    }
}