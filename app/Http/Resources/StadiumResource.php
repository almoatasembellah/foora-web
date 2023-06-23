<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StadiumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this['id'],
            'images' => $this['image'] === 'stadium.png' ?  url('img/stadium.png') : url("storage/{$this['image']}"),
            'name' => $this['name'],
            'city' => $this['city']['name'],
            'phone' => $this['phone'],
            'area' =>  $this['area']['name'],
            'location_url' => $this['location_url'],
            'space' => $this['space'],
            'facebook_url' => $this['facebook_url'],
            'instagram_url' => $this['instagram_url'],
            'type' => getStadiumType($this['type']),
            'gross_type' => getStadiumGrossType($this['gross_type']),
        ];
    }
}
