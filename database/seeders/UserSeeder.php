<?php

namespace Database\Seeders;

use App\Constants\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Tarek',
            'email' => 'tarek@gmail.com',
            'password' => bcrypt('123456789'),
            'age' => 21,
            'height' => 172,
            'weight' => 68,
            'phone' => '01099470527',
            'image' => 'user.png',
            'city_id' => 1,
            'area_id' => 1,
            'role_id' => Roles::PLAYER
        ]);
    }
}
