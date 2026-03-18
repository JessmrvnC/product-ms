<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
{
    return [
        'name' => $this->faker->word(),
        'category' => $this->faker->randomElement(['Electronics', 'Clothing', 'Food']),
        'price' => $this->faker->randomFloat(2, 10, 1000),
        'stock' => $this->faker->numberBetween(1, 100),
    ];
}
}