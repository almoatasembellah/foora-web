<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $this->call([RolesSeeder::class , CitySeeder::class , AreaSeeder::class]);

        $this->call(AdminSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(AreaSeeder::class);
    }
}
