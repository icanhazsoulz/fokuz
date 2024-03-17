<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(50);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->text(300),
            'content' => fake()->text(2000),
            'image' => fake()->imageUrl,
            'status' => rand(0, 1),
        ];
    }
}
