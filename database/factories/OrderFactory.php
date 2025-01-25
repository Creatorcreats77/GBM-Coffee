<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_name' => Classes::inRandomOrder()->first()->name,
            'customer_name' => fake()->name,
            'phone_number' => fake()->numberBetween(99360000000, 99360000000),
            'product_name' => fake()->colorName,
            'price' => fake()->numberBetween(20, 25),
        ];
    }
}
