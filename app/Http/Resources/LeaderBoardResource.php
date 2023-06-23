<?php

namespace App\Http\Resources;

use App\Service\PlayerRateService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaderBoardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this['name'],
            'image' => $this['image'] === 'user.png' ?  url('images/user.png') : url("storage/{$this['image']}"),
            'overall' => $this['overall'] ?? 0
        ];
    }
}
