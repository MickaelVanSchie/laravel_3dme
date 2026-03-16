<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BasketOrder>
 */
class BasketOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): arraygit
    {
        return [
            'id' => fake()->id(),
            'name' => fake()->text(15),
            'description' => fake()->paragraph(),
            'category_id' => fake()->randomElement($categoryIds),
            'price' => fake()->randomNumber(3),
            'production_price' => fake()->randomNumber(2),
            'minimum_selling_price' => fake()->randomNumber(2),
            'stock' => fake()->randomNumber(2),
            'shipment_type' => fake()->randomElement(["parcel", "mailbox"]),
            'image' => fake()->url(),
            'active' => fake()->boolean(),
            'variants' => '',
            'related_products' => '',
            'google_feed' => fake()->boolean(),
        ];
    }

}
