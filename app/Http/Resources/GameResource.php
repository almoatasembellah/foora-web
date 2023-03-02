<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this['name'],
            'phone' => $this['phone'],
            'players_number' => $this['players_number'],
            'price' => $this['price'],
            'date'  => $this['date'],
            'time' => $this['time'],
            'city_id' => $this['city']['name'],
            'area_id' => $this['area']['name'],
            'location_url' => $this['location_url']

        ];
    }
}
