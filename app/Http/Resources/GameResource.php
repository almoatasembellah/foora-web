<?php

namespace App\Http\Resources;

use App\Http\Resources\Api\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this['id'],
            'venue_name' => $this['name'],
            'phone' => $this['phone'],
            'number_of_players' => $this['number_of_players'],
            'price' => $this['price'],
            'date'  => $this['date'],
            'time' => $this['time'],
            'city' => $this['city']['name'],
            'area' => $this['area']['name'],
            'user' => UserResource::make($this['user']),
            'location' => $this['location_url'],
            'joined_players' => getJoinedPlayersCount($this['id'])
        ];
    }
}
