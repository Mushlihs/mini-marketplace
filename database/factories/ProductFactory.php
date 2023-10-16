<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->unique()->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            "image"  => fake()->imageUrl(640, 480, 'products', true),
            "description"  => fake()->sentence(),
            "price"  => fake()->numberBetween(1000, 10000),
            "stock"  => fake()->numberBetween(0, 100),
            "category_id"  => fake()->numberBetween(0, 5)
        ];
    }
}
