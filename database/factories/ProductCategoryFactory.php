<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mainCategoryIds = ProductCategory::all()->pluck('id')->toArray();
        return [
            'name' => fake()->text(10),
            'description' => fake()->paragraph(),
            'main_category_id' => fake()->randomElement($mainCategoryIds),
        ];
    }
}
