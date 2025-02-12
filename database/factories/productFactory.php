<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => fake()->filePath(),
            'name' => fake()->text(15),
            'description' => fake()->paragraph(),
            'category_id' => fake()->randomNumber(),
            'price' => fake()->randomNumber(),
            'production_price' => fake()->randomNumber(),
            'minimum_selling_price' => fake()->randomNumber(),
            'stock' => fake()->randomNumber(),
            'shipment_type' => fake()->text(),
            'image' => fake()->url(),
            'active' => fake()->boolean(),
            'variants' => '',
            'related_products' => '',
            'google_feed' => fake()->boolean(),
        ];
    }
}
