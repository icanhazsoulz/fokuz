<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->userName),
            'date_of_birth' => fake()->date,
            'sex' => Arr::random(['male', 'female']),
            'breed' => Arr::random([fake()->word, '']),
            'photo' => fake()->imageUrl,
        ];
    }
}
