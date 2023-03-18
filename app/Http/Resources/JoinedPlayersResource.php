<?php

namespace App\Http\Resources;

use App\Http\Resources\Api\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JoinedPlayersResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'data' => UserResource::make($this['user'])
        ];
    }
}
