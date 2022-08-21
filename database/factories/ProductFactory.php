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
    public function definition()
    {
        return [
            'name' => fake()->word(3,true),
            'slug' => fake()->slug(2, false),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 100, 10000),
            'image' => fake()->imageUrl(800, 600),
            'user_id' => fake()->randomNumber(1, 99),
        ];
    }
}
