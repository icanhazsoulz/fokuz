<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->firstName . ' ' . fake()->lastName,
            'text' => fake()->text(200),
            'avatar' => fake()->imageUrl,
            'status' => rand(0, 1),
        ];
    }
}
