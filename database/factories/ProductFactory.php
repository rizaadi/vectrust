<?php

namespace Database\Factories;
use App\Product;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(20),
            'price' => numberBetween(100, 5000),
        ];
    }
}
