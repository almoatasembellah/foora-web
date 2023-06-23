<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return array_filter([
            'id' => $this['id'],
            'venue_name' => $this['name'],
            'phone' => $this['phone'],
            'players_number' => $this['players_number'],
            'price' => $this['price'],
            'date'  => $this['date'],
            'time' => $this['time'],
            'city' => $this['city']['name'],
            'area' => $this['area']['name'],
            'type' =>  getGameType($this['type']),
            'user' => UserResource::make($this['user']),
            'location' => $this['location_url'],
            'joined_players_count' => getJoinedPlayersCount($this['id']),
            'accepted_players' => getApprovedPlayers($this['id']),
        ]);
    }
}
