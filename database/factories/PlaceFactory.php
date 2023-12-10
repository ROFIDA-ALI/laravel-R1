<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
            return [
                	'title' => fake()->company(),
                'description' => fake()->text(),
                'image' => fake()->imageUrl() ,    
                'from' => fake()->numberBetween(200, 1000),
                'to' => fake()->numberBetween(200, 1000)
            ];
    }
}
