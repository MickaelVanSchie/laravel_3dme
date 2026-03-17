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
    public function definition(): array
    {
        return [
            'addressId' => null,
            'invoiceAddressId' => null,
            'email' => fake()->email(),
            'name' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'phoneNumber' => fake()->phoneNumber(),
            'orderDate' => fake()->dateTimeBetween('-1 year', 'now'),
            'shippingMethod' => fake()->randomElement(['PostNL', 'DHL', 'UPS']),
            'trackAndTrace' => fake()->optional()->uuid(),
            'molliePaymentId' => fake()->optional()->regexify('tr_[A-Za-z0-9]{10}'),
            'mollieOrderId' => fake()->optional()->regexify('ord_[A-Za-z0-9]{10}'),
            'shippingCostCents' => fake()->numberBetween(0, 1000),
            'discountCents' => fake()->numberBetween(0, 500),
            'actiecode' => fake()->optional()->regexify('[A-Z0-9]{8}'),
            'paymentFee' => fake()->numberBetween(0, 100),
            'paymentMethod' => fake()->randomElement(['ideal', 'creditcard', 'bancontact', 'paypal']),
            'status' => fake()->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'invoiceId' => fake()->optional()->randomNumber(6),
            'invoiceSent' => fake()->boolean(),
        ];
    }

}
