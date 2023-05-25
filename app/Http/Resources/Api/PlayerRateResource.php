<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Validation\Rule;

class PlayerRateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'pace' => $this['pace'] ,
            'shooting' => $this['shooting'] ,
            'passing' => $this['passing'] ,
            'dribbling' => $this['dribbling'] ,
            'defending' => $this['defending'] ,
            'physical' => $this['physical'] ,
        ];
    }
}
