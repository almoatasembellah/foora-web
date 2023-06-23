<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StadiumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return[
            'id' => $this['id'],
            'name' => $this['name'],
            'city' => $this['city']['name'],
            'area' => $this['area']['name'],
            'phone' => $this['phone'],
            'location' => $this['location_url'],
            'space' =>  $this['space'],
            'facebook_url' => $this['facebook_url'],
            'instagram_url' => $this['instagram_url'],
            'type' => $this['type'],
            'type_text' => getStadiumType($this['type']),
            'gross_type' => $this['gross_type'],
            'gross_type_text' => getStadiumGrossType($this['gross_type'])
        ];
    }
}
