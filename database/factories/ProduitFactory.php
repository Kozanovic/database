<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->text(20),
            'description' => fake()->text(),
            'prix' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(1, 100),
        ];
    }
}
