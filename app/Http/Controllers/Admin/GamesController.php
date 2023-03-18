<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Http\Resources\GameResource;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(10);
        return view('admin.pages.games.index' , compact('games'));
    }



    public function update(GameRequest $request,$game)
    {

        $game->update($request->validated());
        return redirect()->route('admin.games.index')->with(['success'=>'Game updated successfully']);

    }

    public function destroy($game)
    {
        $game->delete();
        return redirect()->route('admin.games.index')->with(['success'=>'Game Deleted successfully']);
    }
}
