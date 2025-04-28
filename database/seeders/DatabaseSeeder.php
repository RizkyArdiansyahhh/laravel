<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Rizky Ardiansyah',
        //     'username' => 'rizky01',
        //     'email' => 'rizky@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);
        // User::create([
        //     'name' => 'Budi',
        //     'username' => 'budi01',
        //     'email' => 'budi@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);
        // User::create(['name' => 'cristian',
        //     'username' => 'cristian01',
        //     'email' => 'cristian@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)]);

        $this->call([
            UserSeeder::class,
            CategorieSeeder::class,
        ]);
        Post::factory(100)->recycle([
            User::all(),
            Categorie::all()
        ])->create();
    }
}