<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'exert' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                        ->map(fn($p)=> "<p>$p</p>")->implode(''),
        ];
    }
}
