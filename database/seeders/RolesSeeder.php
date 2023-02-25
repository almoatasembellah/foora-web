<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Player'],
            ['name' => 'Venue'],
            ['name' => 'Scouter'],

        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
