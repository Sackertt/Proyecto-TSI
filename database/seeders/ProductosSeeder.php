<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['nombre_producto'=>"Buzos Talla 0",'cantidad_producto'=>1,'precio_producto'=> 4000,'descrip_producto'=>"Buzos para mascotas. Largo 15cm", 'tipo_producto'=>1,'imagen_producto'=>""],
            ['nombre_producto'=>"Buzos Talla 1",'cantidad_producto'=>1,'precio_producto'=> 4500,'descrip_producto'=>"Buzos para mascotas. Largo 19cm", 'tipo_producto'=>1,'imagen_producto'=>""],
            ['nombre_producto'=>"Buzos Talla 2",'cantidad_producto'=>1,'precio_producto'=> 5000,'descrip_producto'=>"Buzos para mascotas. Largo 25cm", 'tipo_producto'=>1,'imagen_producto'=>""],
            ['nombre_producto'=>"Buzos Talla 3",'cantidad_producto'=>1,'precio_producto'=> 5500,'descrip_producto'=>"Buzos para mascotas. Largo 28cm", 'tipo_producto'=>1,'imagen_producto'=>""],
            ['nombre_producto'=>"Buzos Talla 4",'cantidad_producto'=>1,'precio_producto'=> 6000,'descrip_producto'=>"Buzos para mascotas. Largo 31cm", 'tipo_producto'=>1,'imagen_producto'=>""],
            ['nombre_producto'=>"Buzos Talla 5",'cantidad_producto'=>1,'precio_producto'=> 6500,'descrip_producto'=>"Buzos para mascotas. Largo 41cm", 'tipo_producto'=>1,'imagen_producto'=>""],

            ['nombre_producto'=>"Cama pequeña",'cantidad_producto'=>1,'precio_producto'=>14000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>""],
            ['nombre_producto'=>"Cama mediana",'cantidad_producto'=>1,'precio_producto'=>20000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>""],
            ['nombre_producto'=>"Cama grande",'cantidad_producto'=>1,'precio_producto'=>25000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>""],

            ['nombre_producto'=>"Juguete Pequeño",'cantidad_producto'=>1,'precio_producto'=> 2000,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro pequeño", 'tipo_producto'=> 3,'imagen_producto'=>""],
            ['nombre_producto'=>"Juguete Mediano",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro mediano", 'tipo_producto'=> 3,'imagen_producto'=>""],
            ['nombre_producto'=>"Juguete Grande",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro grande", 'tipo_producto'=> 3,'imagen_producto'=>""],
            ['nombre_producto'=>"Juguete Pollo Pequeño",'cantidad_producto'=>1,'precio_producto'=> 1000,'descrip_producto'=>"Juguete con sonido y forma de pollo, 8cm", 'tipo_producto'=> 3,'imagen_producto'=>""],
            ['nombre_producto'=>"Juguete Pollo Grande",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con sonido y forma de pollo, 15cm", 'tipo_producto'=> 3,'imagen_producto'=>""],
             
            ['nombre_producto'=>"Churu de Pollo",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con pollo y vieira, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>""],
            ['nombre_producto'=>"Churu de Carne",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con carne, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>""],
            ['nombre_producto'=>"Churu de Atun",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con Atun y Salmon, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>""],

            ['nombre_producto'=>"Collar Diseño Gatos",'cantidad_producto'=>1,'precio_producto'=> 1500,'descrip_producto'=>"Collar pequeño con diseño de gatos, uso perfecto para el minino de la casa.", 'tipo_producto'=>5,'imagen_producto'=>""],
            ['nombre_producto'=>"Collar Diseño ",'cantidad_producto'=>1,'precio_producto'=> 1500,'descrip_producto'=>"Collar pequeño con diseño de gatos, uso perfecto para el minino de la casa", 'tipo_producto'=>5,'imagen_producto'=>""],
            ['nombre_producto'=>"Collar Perro Pequeño",'cantidad_producto'=>1,'precio_producto'=> 2000,'descrip_producto'=>"Collar pequeño para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>""],
            ['nombre_producto'=>"Collar Perro Mediano",'cantidad_producto'=>1,'precio_producto'=> 3000,'descrip_producto'=>"Collar mediano para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>""],
            ['nombre_producto'=>"Collar Perro Grande",'cantidad_producto'=>1,'precio_producto'=> 4000,'descrip_producto'=>"Collar grande para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>""],
            ['nombre_producto'=>"Collar Perro Punk",'cantidad_producto'=>1,'precio_producto'=> 3000,'descrip_producto'=>"Collar para perro con estilo punk, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>""],

            // ['nombre_producto'=>"",'cantidad_producto'=>1,'precio_producto'=> ,'descrip_producto'=>"", 'tipo_producto'=> ,'imagen_producto'=>""]

        ]);
    }
}
