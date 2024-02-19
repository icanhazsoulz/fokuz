<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shelter>
 */
class ShelterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'address' => fake()->address,
            'email' => fake()->email,
            'website' => fake()->url,
            'phone' => fake()->phoneNumber,
            'notes' => fake()->text(50),
        ];
    }
}
