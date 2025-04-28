<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
                'name' => 'Rizky ardiansyah',
                'email' => 'Rizky@example.com',
            ]);
        User::factory(5)->create();
    }
}