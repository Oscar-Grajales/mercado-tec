<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comentarios')->insert([
            'contenido'=> 'Excelente producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Gracias por su compra!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 1,
            'usuario_id' => 5
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Mal producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Lo contactaremos pronto!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 1,
            'usuario_id' => 1
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Excelente producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Gracias por su compra!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 2,
            'usuario_id' => 6
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Mal producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Lo contactaremos pronto!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 2,
            'usuario_id' => 2
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Excelente producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Gracias por su compra!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 3,
            'usuario_id' => 7
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Mal producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Lo contactaremos pronto!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 3,
            'usuario_id' => 7
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Excelente producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Gracias por su compra!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 4,
            'usuario_id' => 8
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Mal producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Lo contactaremos pronto!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 4,
            'usuario_id' => 4
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Excelente producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Gracias por su compra!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 5,
            'usuario_id' => 9
        ]);

        DB::table('comentarios')->insert([
            'contenido'=> 'Mal producto',
            'fecha_publicacion' => new DateTime,
            'respuesta' =>'Lo contactaremos pronto!',                       
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'producto_id' => 5,
            'usuario_id' => 10
        ]);

    }
}