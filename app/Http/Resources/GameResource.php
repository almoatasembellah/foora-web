<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class   GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'venue_name' => $this['venue_name'],
            'phone' => $this['phone'],
            'number_of_players' => $this['number_of_players'],
            'price' => $this['price'],
            'date'  => $this['date'],
            'time' => $this['time'],
            'city' => $this['city']['name'],
            'area' => $this['area']['name'],
            'location' => $this['location']

        ];
    }
}
