<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class ProductoAnetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoria 1
        DB::table('productos')->insert([
            'nombre' => 'Poco X3 Pro',
            'piezas' => 10,
            'descripcion' => 'Poco X3 Pro 256GB 8GB - Azul',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 6339.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 2
            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Samsung Galaxy S20 FE',
            'piezas' => 10,
            'descripcion' => 'Samsung Galaxy S20 FE 128GB 6GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 9299.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 2            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Xiaomi Redmi Note 10 Pro',
            'piezas' => 10,
            'descripcion' => 'Xiaomi Redmi Note 10 Pro 128GB 8GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 5929.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Motorola G60',
            'piezas' => 10,
            'descripcion' => 'Motorola G60 128GB 6GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 5995.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Poco X3 Pro',
            'piezas' => 10,
            'descripcion' => 'Poco X3 Pro 256GB 8GB - Azul',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 3.5,
            'precio' => 8339.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Honor 50 Lite',
            'piezas' => 5,
            'descripcion' => 'Honor 50 Lite 128GB 6GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5.5,
            'precio' => 4499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 7            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Realme C11 2021',
            'piezas' => 15,
            'descripcion' => 'Realme C11 2021 32GB 2GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 2394.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Samsung Galaxy S21 FE',
            'piezas' => 25,
            'descripcion' => 'Samsung Galaxy S21 FE 5G 256GB 8GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 18999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 8        
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Realme GT Master Edition',
            'piezas' => 5,
            'descripcion' => 'Realme GT Master Edition 128GB 6GB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 5999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Poco X3 Pro',
            'piezas' => 10,
            'descripcion' => 'Poco X3 Pro 256GB 8GB - Azul',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 4339.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 1,
            'usuario_id' => 5            
        ]);

        //Categoria 2

        DB::table('productos')->insert([
            'nombre' => 'Laptop Lenovo Ideapad 3 14IGL05',
            'piezas' => 5,
            'descripcion' => 'Laptop Lenovo Ideapad 3 14IGL05 Intel Celeron N4020 8GB RAM 1TB DD',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 8299.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 10            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop Gaming Asus TUF FX506LH-HN215T',
            'piezas' => 3,
            'descripcion' => 'Intel Core i5 Gen 10th 8GB RAM 512GB SSD más TUF Gaming Backpack',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 18999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 10            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop Gamer MSI GF63 Thin GeForce GTX 1650',
            'piezas' => 1,
            'descripcion' => 'Core I5 10300H 8GB M.2 256GB 15.6 GF63 Thin 10SCXR-222 MSI GF63 THIN 10SCXR-222',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 19989.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 9            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Xtreme PC Gamer Geforce GT 1030 Core I3 10100F',
            'piezas' => 8,
            'descripcion' => '16GB SSD 120GB HDD 2TB WIFI XTREME PC GAMING XTAEI316GB1030',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 11899.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 9            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop Apple MacBook Pro',
            'piezas' => 5,
            'descripcion' => 'Laptop Apple MacBook Pro - Espacial Gris Apple MVVK2LL/A',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 20,
            'precio' => 48035.64,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop Yoga Touch 11.6¨',
            'piezas' => 2,
            'descripcion' => 'Laptop Yoga Touch 11.6¨ Direkt-Tek Direkt-Tek DTLAPY 116-1 Intel Quad Core Ram 4GB W10 Reacondicionado',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5,
            'precio' => 4499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop Lenovo Ideapad',
            'piezas' => 10,
            'descripcion' => 'Laptop Lenovo Ideapad Intel Core i3 RAM 8GB DD 1TB',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 13099.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 5            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop DELL Inspiron 3501',
            'piezas' => 5,
            'descripcion' => 'Laptop DELL Inspiron 3501 Intel Core I3 1005G1 4GB 1TB Pantalla 15.6 DELL KWNWX',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 11948.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop HP 240 G7',
            'piezas' => 2,
            'descripcion' => 'Laptop HP 240 G7:Procesador Intel Core i3 1005G1 hasta 3.4 HP 151D3LT#ABM',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 10499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'HP Notebook - 17-by0071cl 17.3"',
            'piezas' => 6,
            'descripcion' => 'HP Notebook - 17-by0071cl 17.3" Intel Core™ i3-8130U 2.2 GHz Intel UHD Graphics 620 4 GB RAM 16 GB f HP 17-by0071cl',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 9999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 2,
            'usuario_id' => 8            
        ]);

    }
}
