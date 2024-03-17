<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => fake()->text(100),
            'answer' => fake() ->text(250),
            'post_id' => Arr::random(Post::all()->pluck('id')->toArray()),
            'link_label' => 'Mehr lesen',
        ];
    }
}
