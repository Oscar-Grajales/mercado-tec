<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;


class ProductoAngelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoria 3
        DB::table('productos')->insert([
            'nombre' => 'Xbox Series S de 512 GB Edición Stand alone',
            'piezas' => 15,
            'descripcion' => 'La consola Xbox Series S, totalmente digital, ofrece juegos de próxima generación a un precio accesible.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 7989.06,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Control Inalámbrico Xbox Pulse Red',
            'piezas' => 20,
            'descripcion' => 'Vive la experiencia del diseño modernizado del Control Inalámbrico de Xbox, Pulse Red, o con superficies esculpidas y una geometría refinada para una mayor comodidad durante el juego con una duración de la batería de hasta 40 horas.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 1444.15,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Control Alámbrico Xbox One Power A',
            'piezas' => 10,
            'descripcion' => 'Producto oficial y compatible con Xbox One, Xbox One S, Xbox One X y Windows 10. 2 Sticks analógicos: precisión ajustada para eliminar las zonas muertas. Almohadilla direccional con forma de D de 8 vías.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 1119.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 9            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Consola PlayStation 5 825 GB',
            'piezas' => 10,
            'descripcion' => 'Experimenta una velocidad sorprendente de carga con una inmersión más intensa gracias a la SSD de ultra alta velocidad y una generación totalmente nueva de increíbles juegos de PlayStation',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 8.5,
            'precio' => 13999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 8            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Control inalámbrico para Playstation 5 DualSense',
            'piezas' => 20,
            'descripcion' => 'El control inalámbrico DualSense ofrece retroalimentación háptica inmersiva, gatillos daptativos dinámicos y un micrófono incorporado.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 3.5,
            'precio' => 1439.10,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cargador de pilas Bionik para PS5',
            'piezas' => 10,
            'descripcion' => 'Base de carga y visualización dual para hasta dos controladores inalámbricos DualSense',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5.5,
            'precio' => 594.15,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 8          
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Control Inalámbrico para PlayStation 5 DualSense Edición Galactic Purple',
            'piezas' => 12,
            'descripcion' => 'Dale vida a los mundos de los juegos. Siente las acciones dentro del juego y en los ambientes simulados gracias a la respuesta háptica.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 1529.10,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 8           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Consola portátil Nintendo Switch OLED de 64 GB edición White Joy-Con',
            'piezas' => 8,
            'descripcion' => 'Además de la nueva pantalla, que ofrece colores brillantes y contrastes definidos, la consola Nintendo Switch modelo OLED incluye un soporte ajustable y amplio para encontrar el ángulo de vista perfecto.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 10499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Consola Portátil Nintendo Switch Lite 32 GB',
            'piezas' => 11,
            'descripcion' => 'Nintendo Switch Lite, una nueva versión de la consola Nintendo Switch que está optimizada para el juego personal y portátil.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 6099.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Chatpad inalámbrico Dobe Xbox One',
            'piezas' => 12,
            'descripcion' => 'Mini teclado inalámbrico que le permite jugar, escribir texto y buscar fácilmente sin necesidad de baterías. Alcance inalámbrico mejorado de hasta 10 metros.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 3,
            'usuario_id' => 6            
        ]);

        //Categoria 4
        DB::table('productos')->insert([
            'nombre' => 'Bocina Portatil Bluetooth Flip 5 Azul Oceano JBL',
            'piezas' => 16,
            'descripcion' => 'Altavoz Bluetooth impermeable JBL Flip 5. Con 20 W de potencia de audio. Impermeabilidad IPX7. El Flip 5 le brinda más de 12 horas de duración de la batería.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 2399.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 11         
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bocina Inalámbrica Bluetooth Harman Kardon Aura Studio 3',
            'piezas' => 8,
            'descripcion' => 'Eleva tu hogar con el diseño icónico e intemporal del Harman Kardon Aura Studio 3 para obtener 360 grados de hermoso sonido. Una impresionante bocina Bluetooth 4.2 que se ve tan bien como suena.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 6999.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 11            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bocina Bluetooth Reloj Despertador iHOME iBT295B',
            'piezas' => 7,
            'descripcion' => 'Despierta a tu manera: fácilmente programable, el reloj despertador Bluetooth iHome te permite despertar tu propia música.
            El reloj despertador incluye siete modos de encendido a luz.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 1399.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 12          
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bocina Ultimate Ears Wonderboom 2 984-001557',
            'piezas' => 15,
            'descripcion' => 'Ultimate Ears WONDERBOOM 2 produce un sonido sorprendentemente potente.
            Tiene el nuevo modo Outdoor para exteriores.            
            Con una batería que dura 13 horas.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 15,
            'precio' => 1313.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 12           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bocina Bose Soundlink Mini II ',
            'piezas' => 8,
            'descripcion' => 'Inalámbrico y ultracompacto. El SoundLink Mini II tiene un altavoz integrado. 
            La batería de iones de litio del altavoz proporciona hasta 10 horas de reproducción.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 20,
            'precio' => 4799.64,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 5           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bocina Inalámbrica JBL Go 2 - Negro',
            'piezas' => 13,
            'descripcion' => 'La bocina JBL GO 2 está diseñada para ir contigo a todos lados. Tamaño compacto y ligero, incluso cerca o dentro de la piscina, esto gracias a su certificación IPX7 que te garantiza que es resistente al agua.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 0,
            'porcentaje'=> 5,
            'precio' => 1099.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 5            
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Audifonos Huawei Freebuds 4i Negros',
            'piezas' => 10,
            'descripcion' => 'Los auriculares HUAWEI FreeBuds 4i son auténticos auriculares estéreo inalámbricos (TWS) que constan de auriculares izquierdo y derecho y un estuche de carga, y cuentan con un diseño en la oreja para una mayor comodidad al usarlos.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 5,
            'precio' => 1549.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 10           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Steren audifono BT AUD 797',
            'piezas' => 12,
            'descripcion' => 'Escucha tus canciones con su sonido envolvente y sin ruido exterior gracias a sus auriculares y diadema que se ajusta perfectamente a tus orejas. Incorporan batería recargable que te dará hasta 4 horas de uso continuo.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 449.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 11           
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Audifonos Gamer HyperX Cloud Alpha S 7.1 PC HX-HSCAS-BL',
            'piezas' => 10,
            'descripcion' => 'Sonido Surround Virtual 7.1.
            Deslizadores de ajuste de banda de sujeción.
            Mezclador de control de audio avanzado.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 2499.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Audifonos Panasonic RP-HDE3ME Negro',
            'piezas' => 11,
            'descripcion' => 'Sonido directo potente.
            Cómodo y estable.
            Diseño minimalista Diseño sencillo de un solo tono.',
            'fecha_publicacion' => new DateTime,
            'esta_consignado' => 1,
            'porcentaje'=> 10,
            'precio' => 859.00,
            'razon_consigna' => '',           
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'categoria_id' => 4,
            'usuario_id' => 11
        ]);
    }
}
