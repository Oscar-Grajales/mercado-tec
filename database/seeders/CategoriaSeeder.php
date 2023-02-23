<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'nombre' => 'Celulares' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Computadoras' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Videojuegos' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Audio' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Componentes' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Redes y conectividad' ,
            'esta_activada' => 1,          
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            
        ]);
        
        
    }
}