<?php

namespace App\Http\Controllers\Api;

use App\Constants\GameTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Game\GameRequest;
use App\Http\Requests\Api\Game\SearchGameRequest;
use App\Http\Requests\Api\Game\UpdateGameRequest;
use App\Http\Resources\Api\GameResource;
use App\Http\Traits\HandleApi;
use App\Models\Game;
use App\Models\PlayerRate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    use HandleApi;

    public function searchGames(SearchGameRequest $request)
    {
        $games = Game::where('user_id' , '!=' , $request->user()->id)
            ->where('city_id' , $request->get('city_id'))
            ->where('date', '>=', Carbon::today()->format('Y-m-d'))
            ->where('time' , '>=' , Carbon::now()->addHours(2)->format('h:i A'))
            ->where(function ($query) use ($request) {
                if ($request->get('area_id')){
                    return $query->where('area_id' , $request->get('area_id'));
                }
            })->get();
        return $this->sendResponse(GameResource::collection($games) , 'Game list is fetched successfully');
    }

    public function getCompetitiveGames(SearchGameRequest $request)
    {
        $games = Game::where('user_id' , '!=' , $request->user()->id)
            ->where('city_id' , $request->get('city_id'))
            ->where('date', '>=', Carbon::today()->format('Y-m-d'))
            ->where('time' , '>=' , Carbon::now()->addHours(2)->format('h:i A'))
            ->where('type' , GameTypes::COMPETITIVE)
            ->where(function ($query) use ($request) {
                if ($request->get('area_id')){
                    return $query->where('area_id' , $request->get('area_id'));
                }
            })->get();
        return $this->sendResponse(GameResource::collection($games) , 'Game list is fetched successfully');
    }
    public function getCreatedGames(Request $request)
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


    public function update(UpdateGameRequest $request,$id)
    {
        $game = Game::where(['id' => $id , 'user_id' => $request->user()->id])->first();
        if ($game ){
        $game->update($request->validated());
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

    public function getSpecificGame($id)
    {
        $game = Game::where('id', $id)->first();
        if ($game) {
            return $this->sendResponse(GameResource::make($game), "Game Fetched successfully");
        }
        return $this->sendError("Game Error", "Game Not Found");
    }

    public function calculateOverallRating(Player $player)
    {
        $overallRating = ($player->pace + $player->shooting + $player->passing + $player->dribbling + $player->defending + $player->physical) / 6;

        return round($overallRating);
    }


    public function ratePlayer(PlayerRate $player, Request $request)
    {
        $validatedData = $request->validate([
            'pace' => 'required|integer|min:1|max:99',
            'shooting' => 'required|integer|min:1|max:99',
            'passing' => 'required|integer|min:1|max:99',
            'dribbling' => 'required|integer|min:1|max:99',
            'defending' => 'required|integer|min:1|max:99',
            'physical' => 'required|integer|min:1|max:99',
        ]);

        $player->update($validatedData);

        $overallRating = $this->calculateOverallRating($player);

        $player->user->overall_rating = $overallRating;
        $player->user->save();

        return redirect()->back()->with('success', 'Player rated successfully.');
    }

    public function storePlayerRating(Request $request, $playerId) {
        $player = Player::find($playerId);
        $rating = $request->input('rating');

        $player->ratings()->create([
            'user_id' => auth()->user()->id,
            'rating' => $rating,
        ]);

        return redirect()->back()->with('success', 'Player rated successfully.');
    }
}
