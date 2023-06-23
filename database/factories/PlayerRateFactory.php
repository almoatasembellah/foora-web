<?php

namespace Database\Factories;

use App\Constants\Roles;
use App\Models\Game;
use App\Models\PlayerRate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PlayerRateFactory extends Factory
{
    protected $model = PlayerRate::class;

    public function definition(): array
    {
        return [
            'pace' => mt_rand(0 , 100),
            'shooting' => mt_rand(0 , 100),
            'passing' => mt_rand(0 , 100),
            'dribbling' => mt_rand(0 , 100),
            'defending' => mt_rand(0 , 100),
            'physical' => mt_rand(0 , 100),
            'scouter_id' => mt_rand(1 , User::where('role_id' , Roles::SCOUTER)->count()),
            'player_id' => mt_rand(1 , User::where('role_id' , Roles::PLAYER)->count()),
            'game_id' => mt_rand(1 , Game::all()->count()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
