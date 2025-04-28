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
            'slug' => 'teknologi'
        ]);
        Categorie::create([
            'name' => 'Olahraga & Kesehatan',
            'slug' => 'olahraga-kesehatan'
        ]);
        Categorie::create([
            'name' => 'Tips & Trik',
            'slug' => 'tips-trik'
        ]);
        Categorie::create([
            'name' => 'Mechin Learning',
            'slug' => 'mechin-learning'
        ]);
    }
}