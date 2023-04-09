<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AreasResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return array_filter([
            'id' => $this['id'],
            'name' => $this['name'],
            'city' => $this['city']['name']
        ]);
    }
}
