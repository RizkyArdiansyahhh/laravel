<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categorie::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
            'color' => 'red'
        ]);
        Categorie::create([
            'name' => 'Olahraga & Kesehatan',
            'slug' => 'olahraga-kesehatan',
            'color' => 'yellow'
        ]);
        Categorie::create([
            'name' => 'Tips & Trik',
            'slug' => 'tips-trik',
            'color' => 'cyan'
        ]);
        Categorie::create([
            'name' => 'Mechine Learning',
            'slug' => 'mechine-learning',
            'color' => 'blue'
        ]);
    }
}