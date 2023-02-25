<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        $areas = [
            ['name' => 'Ain Shams' , 'city_id' => 1],
            ['name' => 'El Zaytoun' , 'city_id' => 1],
            ['name' => 'Masr El Gedida' , 'city_id' => 1],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
