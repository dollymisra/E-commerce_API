<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
           'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'sku' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{5}'),
            'image_url' => $this->faker->imageUrl(640, 480, 'products'),
            'is_active' => $this->faker->boolean(80),
            'category' => $this->faker->randomElement(['Electronics', 'Clothing', 'Books', 'Home', 'Beauty']),
            'tags' => json_encode($this->faker->words(mt_rand(1, 5))),
        ];
    }
}
