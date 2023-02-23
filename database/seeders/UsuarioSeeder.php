<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
          'nombre' => 'Oscar Grajales',
          'email' => 'oscargg@gmail.com',
          'password' => 'oscar123',
          'fecha_alta' => new DateTime,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
          'rol_id' => '1'
        ]);

        DB::table('usuarios')->insert([
          'nombre' => 'Anette Toledo',
          'email' => 'anettetld@gmail.com',
          'password' => 'anette123',
          'fecha_alta' => new DateTime,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
          'rol_id' => '2'
        ]);

        DB::table('usuarios')->insert([
          'nombre' => 'Angel López',
          'email' => 'angell@gmail.com',
          'password' => 'angel123',
          'fecha_alta' => new DateTime,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
          'rol_id' => '3'
        ]);

        // Clientes

        DB::table('usuarios')->insert([
            'nombre' => 'Manuel Guzman',
            'email' => 'manuelg@gmail.com',
            'password' => 'manuel123',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);
        
        DB::table('usuarios')->insert([
            'nombre' => 'Jarif Lopez',
            'email' => 'jariflopez@gmail.com',
            'password' => 'jarif15',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Michelle Cruz',
            'email' => 'michellect@gmail.com',
            'password' => 'michelle123',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Daniel Grajales',
            'email' => 'danielgg@gmail.com',
            'password' => 'daniel123',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Fernando Morales',
            'email' => 'fernandomorales@gmail.com',
            'password' => 'fernandom987',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Luis Ortega',
            'email' => 'luisortega1@gmail.com',
            'password' => 'luis12345',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Roberto Cruz',
            'email' => 'robertoxg@gmail.com',
            'password' => 'roberto99x',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Enrique Morales',
            'email' => 'enriquemorales@gmail.com',
            'password' => 'enrique999',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Adriana Sánchez',
            'email' => 'adrianasan@gmail.com',
            'password' => 'adriana777',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Adrian Rojas',
            'email' => 'adrianred@gmail.com',
            'password' => 'adrian12345',
            'fecha_alta' => new DateTime,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'rol_id' => '4'
          ]);            
    }
}
