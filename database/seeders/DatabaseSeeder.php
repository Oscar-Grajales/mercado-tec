<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ProductoAnetteSeeder::class);
        $this->call(ProductoAngelSeeder::class);
        $this->call(ProductoOscarSeeder::class);
        $this->call(ComentarioSeeder::class);
        $this->call(FotoSeeder::class);
    }
}
