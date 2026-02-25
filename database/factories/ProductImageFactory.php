<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = Product::all()->pluck('id')->toArray();
        return [
            'product_id' => fake()->randomNumber($productIds),
            'position' => fake()->randomNumber(2),
            'url' => fake()->url(),
            'updated_at' => 1,
            'created_at' => 1,
        ];
    }
}
