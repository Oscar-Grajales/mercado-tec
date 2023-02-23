<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;


class ProductoOscarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoria 5
        DB::table('productos')->insert([
            'nombre' => 'SSD Kingston A400',
            'piezas' => 22,
            'descripcion' => 'SSD Kingston A400, 120GB, SATA III, 2.5", 7mm',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 509.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 2
            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'SSD Adata Ultimate SU630',
            'piezas' => 19,
            'descripcion' => 'SSD Adata Ultimate SU630, 480GB, SATA, 2.5", 7mm',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 9299.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 2            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Memoria Flash SanDisk Ultra A1',
            'piezas' => 10,
            'descripcion' => 'Memoria Flash SanDisk Ultra A1, 32GB MicroSDHC Clase 10',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 222.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Memoria Flash Kingston Canvas Select Plus',
            'piezas' => 10,
            'descripcion' => 'Memoria Flash Kingston Canvas Select Plus, 512GB MicroSDXC UHS-I Clase 10, con Adaptador',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 1279.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Memoria USB Kingston DataTraveler SE9',
            'piezas' => 50,
            'descripcion' => 'Memoria USB Kingston DataTraveler SE9, 32GB, USB 2.0, Gris',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 3.5,
            'precio' => 202.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Memoria USB Kingston DataTraveler Exodia',
            'piezas' => 33,
            'descripcion' => 'Memoria USB Kingston DataTraveler Exodia, 128GB, USB A, Negro',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5.5,
            'precio' => 219.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 7            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Mouse TechZone Óptico TZMOUG201',
            'piezas' => 22,
            'descripcion' => 'Mouse TechZone Óptico TZMOUG201, RF Inalámbrico, 1600DPI, Negro',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 223.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Mouse Logitech Óptico MX Anywhere 3',
            'piezas' => 19,
            'descripcion' => 'Mouse Logitech Óptico MX Anywhere 3, Recargable, Inalámbrico, USB, 4000DPI, Gris',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 8        
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Mouse Gamer Logitech Óptico G502 Hero RGB',
            'piezas' => 13,
            'descripcion' => 'Mouse Gamer Logitech Óptico G502 Hero RGB, Alámbrico, USB, 25.600DPI, Blanco/Negro',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 969.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Thermaltake Base Enfriadora Massive 20 RGB',
            'piezas' => 12,
            'descripcion' => 'Thermaltake Base Enfriadora Massive 20 RGB para Laptop 19", 1 Ventilador, Negro',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 1039.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 5,
            'usuario_id' => 5            
        ]);

        //Categoria 6
        DB::table('productos')->insert([
            'nombre' => 'Switch TP-Link Gigabit Ethernet TL-SG1024D',
            'piezas' => 8,
            'descripcion' => 'Switch TP-Link Gigabit Ethernet TL-SG1024D, 24 Puertos 10/100/1000Mbps, 48 Gbit/s, 8000 Entradas - No Administrable',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 1799.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 10           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intellinet Plugs Modulares RJ-45',
            'piezas' => 9,
            'descripcion' => 'Intellinet Plugs Modulares RJ-45, Cate5e, Bote con 100 Piezas Transparentes',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 358.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 10            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Router TP-Link Fast Ethernet TL-WR840N',
            'piezas' => 7,
            'descripcion' => 'Router TP-Link Fast Ethernet TL-WR840N, Inalámbrico, 300Mbit/s, 5x RJ-45, 2.4GHz, con 2 Antenas',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 290.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 9            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Router TP-Link Fast Ethernet TL-WR841HP',
            'piezas' => 15,
            'descripcion' => 'Router TP-Link Fast Ethernet TL-WR841HP, Inalámbrico, 300Mbit/s, 5x RJ-45, con 2 Antenas de 9dBi',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 739.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
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
            'categoria_id' => 6,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Router TP-Link Fast Ethernet de Banda Dual ARCHER C50',
            'piezas' => 13,
            'descripcion' => 'Router TP-Link Fast Ethernet de Banda Dual ARCHER C50, Inalámbrico, 867Mbit/s, 5x RJ-45, 2.4/5GHz, con 4 Antenas Externas de 5dBi',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5,
            'precio' => 579.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 3            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Access Point TP-LINK TL-WA801N',
            'piezas' => 10,
            'descripcion' => 'Access Point TP-LINK TL-WA801N, 300 Mbit/s, 1x RJ-45, 2 Antenas de 5dBi',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 413.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 5            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Access Point TP-Link EAP115 V4',
            'piezas' => 12,
            'descripcion' => 'Access Point TP-Link EAP115 V4, 300Mbps, 1x RJ-45, 2.4GHz, 2 Antenas Internas de 4dBi',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 689.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Manhattan Módem Externo USB',
            'piezas' => 18,
            'descripcion' => 'Manhattan Módem Externo USB, 1x RJ-11, 56 Kbit/s, Blanco',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 549.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Netpoint Antena Direccional NP-PRO-S-2PACK',
            'piezas' => 5,
            'descripcion' => 'Netpoint Antena Direccional NP-PRO-S-2PACK, 27dBi, 4.9 - 6.4GHz',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 3819.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 6,
            'usuario_id' => 6
        ]);
    }
}
