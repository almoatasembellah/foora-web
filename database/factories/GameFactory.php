<?php

namespace Database\Factories;

use App\Constants\GameTypes;
use App\Models\Area;
use App\Models\City;
use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'players_number' => $this->faker->numberBetween(50 , 100),
            'price' => $this->faker->numberBetween(5 , 10),
            'date' => Carbon::tomorrow(),
            'time' => $this->faker->time(),
            'location_url' => $this->faker->url(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'type' => GameTypes::COMPETITIVE,
            'city_id' => 1,
            'area_id' => 1,
            'user_id' => 1,
        ];
    }
}
