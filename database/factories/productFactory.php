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
            'category_id' => fake()->randomNumber(2),
            'price' => fake()->randomNumber(3),
            'production_price' => fake()->randomNumber(2),
            'minimum_selling_price' => fake()->randomNumber(2),
            'stock' => fake()->randomNumber(2),
            'shipment_type' => fake()->text(),
            'image' => fake()->url(),
            'active' => fake()->boolean(),
            'variants' => '',
            'related_products' => '',
            'google_feed' => fake()->boolean(),
        ];
    }
}
