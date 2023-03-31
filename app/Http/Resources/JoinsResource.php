<?php

namespace App\Http\Resources;

use App\Http\Resources\Api\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JoinsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this['game']['id'],
            'venue_name' => $this['game']['name'],
            'phone' => $this['game']['phone'],
            'players_number' => $this['game']['players_number'],
            'price' => $this['game']['price'],
            'date'  => $this['game']['date'],
            'time' => $this['game']['time'],
            'city' => $this['game']['city']['name'],
            'area' => $this['game']['area']['name'],
            'creator' => UserResource::make($this['game']['user']),
            'location' => $this['game']['location_url'],
            'status' => geJoinGameStatus($this['status']),
            'player' => UserResource::make($this['user'])
        ];
    }
}
