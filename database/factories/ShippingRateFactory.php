<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShippingRate>
 */
class ShippingRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->word(),
            "shipment_type" => fake()->randomElement(['mailbox', 'parcel']),
            "price_cents" => fake()->randomNumber(3),
            "country" => fake()->randomElement(['NL', 'BE', 'DE', "FR"]),
        ];
    }
}
