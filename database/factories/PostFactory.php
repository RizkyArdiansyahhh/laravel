<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

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
        $title = fake()->sentence();
        return [
            'title' => fake()->sentence(),
            'author_id' => User::factory(),
            'categorie_id' => Categorie::factory(),
            'slug' => Str::slug(fake()->unique()->sentence()),
            'body' => fake()->text()
        ];
    }
}