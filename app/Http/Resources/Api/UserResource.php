<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return array_filter([
            'name' => $this['name'],
            'email' => $this['email'],
            'age' => $this['age'],
            'height' => $this['height'],
            'weight' => $this['weight'],
            'image' => $this['image'] === 'user.png' ?  url('images/user.png') : url("storage/{$this['image']}"),
            'phone' => $this['phone'],
            'city' => $this['city']['name'],
            'area' => $this['area']['name']
        ]);
    }
}
