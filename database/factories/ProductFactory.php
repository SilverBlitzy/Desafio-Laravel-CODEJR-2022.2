<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'flavor' => $this->faker->word(),
            'price' => $this->faker->randomNumber(2),
            'image' => $this->faker->word(),
            'description' => $this->faker->text($maxNbChars = 100)
        ];
    }
}
