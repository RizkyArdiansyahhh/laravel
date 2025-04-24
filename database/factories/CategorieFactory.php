<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['technologi', 'Olahraga & Kesehatan', 'Tips & Trik', 'Berita Harian'];
        $randomCategorie = fake()->unique()->randomElement($categories);
        return [
            'name' => $randomCategorie,
            'slug' => Str::slug($randomCategorie)
        ];
    }
}