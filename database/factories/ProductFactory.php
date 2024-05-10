<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'regular_price' => fake()->price(),
            'sale_price' => fake()->price(),
            'description' => fake()->description(),
            'rating' => fake()->numberBetween(1, 5),
            'colorway' => fake()->colorName(),
            'status' => fake()->status(),
            'images' => fake()->imageUrl(),
        ];
    }
}
