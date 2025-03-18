<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;
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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'short_desc' => fake()->text(),
            'price' => fake()->numberBetween($min = 50, $max = 2000),
            'discount' => fake()->numberBetween($min = 10, $max = 80),
            'discount_price' => fake()->numberBetween($min = 100, $max = 200),
            'image' => fake()->imageUrl(),
            'stock' => fake()->randomDigit,
            'star' => fake()->numberBetween($min = 1, $max = 5),
            'remark' =>  $this->faker->randomElement(['popular', 'top', 'trending', 'regular']),
            'category_id' => fake()->randomDigit,
            'brand_id' => fake()->randomDigit,
        ];
    }
}
