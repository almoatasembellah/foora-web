<?php

namespace App\Http\Resources;

use App\Http\Resources\Api\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameJoinsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'game' => GameResource::make($this['game']),
            'joined_player' => UserResource::make($this['user'])
        ];
    }
}
