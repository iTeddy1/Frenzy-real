<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->address(),
            'address_line_1' => fake()->streetAddress(),
            'address_line_2' => fake()->address(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
