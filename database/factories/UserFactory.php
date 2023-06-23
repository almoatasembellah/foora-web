<?php

namespace Database\Factories;

use App\Constants\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => bcrypt('123456789'),
            'age' => 21,
            'height' => 172,
            'weight' => 68,
            'phone' => '01099470527',
            'image' => 'user.png',
            'city_id' => 1,
            'area_id' => 1,
            'role_id' => Roles::PLAYER,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
