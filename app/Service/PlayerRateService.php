<?php

namespace App\Service;

class PlayerRateService
{

    public static function getPlayerRateOverall($rates): array
    {
        $pace = 0;
        $shooting = 0;
        $passing = 0;
        $dribbling = 0;
        $defending = 0;
        $physical = 0;
        foreach ($rates as $rate) {
            $pace += $rate['pace'];
            $shooting += $rate['shooting'];
            $passing += $rate['passing'];
            $dribbling += $rate['dribbling'];
            $defending += $rate['defending'];
            $physical += $rate['physical'];
        }

        return [
            'pace' => floor($pace / count($rates)),
            'shooting' => floor($shooting / count($rates)),
            'passing' => floor($passing / count($rates)),
            'dribbling' => floor($dribbling / count($rates)),
            'defending' => floor($defending / count($rates)),
            'physical' => floor($physical / count($rates)),
            'overall' => floor(((floor($pace / count($rates)) + floor($shooting / count($rates)) + floor($passing / count($rates)) + floor($dribbling / count($rates)) + floor($defending / count($rates)) + floor($physical / count($rates))) / 600) * 100),
        ];
    }
}
