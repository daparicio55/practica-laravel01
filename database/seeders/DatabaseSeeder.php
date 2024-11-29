<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $cateogia1 = Categoria::create([
            'nombre' => 'Ficcion',
        ]);
        $cateogia2 = Categoria::create([
            'nombre' => 'No ficcion',
        ]);
        $categoria3 = Categoria::create([
            'nombre' => 'Terror',
        ]);
        $categoria4 = Categoria::create([
            'nombre' => 'Aventura',
        ]);
    }
}
