<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return response()->json([
           'status' => true,
            'games' => $games
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'game' => $game
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGameRequest $request, Game $game)
    {
        $game->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Game Updated Successfully',
            'game' => $game
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response()->json([
            'status' => true,
            'message' => 'Game Deleted Successfully',
        ], 200);
    }
}
