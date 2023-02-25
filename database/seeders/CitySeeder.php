<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            ['name' => 'Cairo'],
            ['name' => 'Alexandria'],
            ['name' => 'Giza'],
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
