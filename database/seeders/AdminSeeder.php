<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => 'Mutasim',
            'email' => 'mutasim@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
