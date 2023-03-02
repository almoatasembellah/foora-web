<?php

namespace App\Http\Controllers;

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
        return view('web.games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'venue_name'=>'required|string|max:255',
            'phone'=>'required|string|max:11',
            'number_of_players'=>'required|integer',
            'price'=>'required|integer',
            'date'=>'required',
            'time'=>'required',
            'city'=>'required',
            'area'=>'required',
            'location'=>'required',
        ]);
        Game::create([
            'venue_name'=>$request->venue_name,
            'phone'=>$request->phone,
            'number_of_players'=>$request->number_of_players,
            'price'=>$request->price,
            'date'=>$request->date,
            'time'=>$request->time,
            'city'=>$request->city,
            'area'=>$request->area,
            'location'=>$request->location,
        ]);
        return redirect()->route('games.create')->with('status','Game Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('web.games.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('web.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'venue_name'=>'required|string|max:255',
            'phone'=>'required|string|max:11',
            'number_of_players'=>'required|integer',
            'price'=>'required|integer',
            'date'=>'required',
            'time'=>'required',
            'city'=>'required',
            'area'=>'required',
            'location'=>'required',
        ]);
        Game::create([
            'venue_name'=>$request->venue_name,
            'phone'=>$request->phone,
            'number_of_players'=>$request->number_of_players,
            'price'=>$request->price,
            'date'=>$request->date,
            'time'=>$request->time,
            'city'=>$request->city,
            'area'=>$request->area,
            'location'=>$request->location,
        ]);
        return redirect()->route('games.index')->with('status', 'Game Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('status', 'Game Deleted Successfully');
    }
}
