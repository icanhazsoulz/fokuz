<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company,
            'subtitle' => fake()->text(100),
            'description' => fake()->text(250),
            'logo' => fake()->imageUrl,
            'website' => fake()->url,
            'status' => rand(0, 1),
        ];
    }
}
