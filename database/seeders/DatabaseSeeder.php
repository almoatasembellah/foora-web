<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\PlayerRate;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RolesSeeder::class , CitySeeder::class , AreaSeeder::class , AdminSeeder::class, UserSeeder::class]);
        User::factory()->count(30)->create();
        Game::factory()->count(10)->create();;
        PlayerRate::factory()->count(50)->create();;
    }
}
