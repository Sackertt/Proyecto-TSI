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
            ['nombre_producto'=>"Capa Talla 2",'cantidad_producto'=>1,'precio_producto'=> 4000,'descrip_producto'=>"Buzos para mascotas. Largo 15cm", 'tipo_producto'=>1,'imagen_producto'=>"Capa2.jpeg"],
            ['nombre_producto'=>"Capa Talla 4",'cantidad_producto'=>1,'precio_producto'=> 4500,'descrip_producto'=>"Buzos para mascotas. Largo 19cm", 'tipo_producto'=>1,'imagen_producto'=>"Capa1.jpeg"],
            ['nombre_producto'=>"Buzos Talla 2",'cantidad_producto'=>1,'precio_producto'=> 5000,'descrip_producto'=>"Buzos para mascotas. Largo 25cm", 'tipo_producto'=>1,'imagen_producto'=>"Buzo1.jpeg"],
            ['nombre_producto'=>"Buzos Talla 3",'cantidad_producto'=>1,'precio_producto'=> 5500,'descrip_producto'=>"Buzos para mascotas. Largo 28cm", 'tipo_producto'=>1,'imagen_producto'=>"Buzo2.jpeg"],

            ['nombre_producto'=>"Cama pequeña Mickey",'cantidad_producto'=>1,'precio_producto'=>14000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>"Cama-Pequeña-Mickey.jpeg"],
            ['nombre_producto'=>"Cama pequeña Minnie",'cantidad_producto'=>1,'precio_producto'=>14000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>"Cama-Pequeña-Minnie.jpeg"],
            ['nombre_producto'=>"Cama mediana",'cantidad_producto'=>1,'precio_producto'=>20000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>"Cama-Mediana.jpeg"],
            ['nombre_producto'=>"Cama grande",'cantidad_producto'=>1,'precio_producto'=>25000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>"Cama-Grande.jpeg"],

            ['nombre_producto'=>"Juguete Pequeño",'cantidad_producto'=>1,'precio_producto'=> 2000,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro pequeño", 'tipo_producto'=> 3,'imagen_producto'=>"Juguete-pequeño.jpeg"],
            ['nombre_producto'=>"Juguete Mediano",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro mediano", 'tipo_producto'=> 3,'imagen_producto'=>"Juguete-Mediano.jpeg"],
            ['nombre_producto'=>"Juguete Cuerda",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con doble funcion, limpiadro de dientes, Perro grande", 'tipo_producto'=> 3,'imagen_producto'=>"Juguete-Cuerda.jpeg"],
            ['nombre_producto'=>"Juguete Pollo Pequeño",'cantidad_producto'=>1,'precio_producto'=> 1000,'descrip_producto'=>"Juguete con sonido y forma de pollo, 8cm", 'tipo_producto'=> 3,'imagen_producto'=>"Juguete-Chico.jpeg"],
            ['nombre_producto'=>"Juguete Pollo Grande",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Juguete con sonido y forma de pollo, 15cm", 'tipo_producto'=> 3,'imagen_producto'=>"Pollo-Grande.jpeg"],
             
            ['nombre_producto'=>"Churu de Pollo",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con pollo y vieira, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>"churu-pollo.jpg"],
            ['nombre_producto'=>"Churu de Carne",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con carne, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>"churu-atun.jpg"],
            ['nombre_producto'=>"Churu de Atun",'cantidad_producto'=>1,'precio_producto'=> 2500,'descrip_producto'=>"Snack para gatos que puede lamerse, hecha con Atun y Salmon, cuenta con una textura cremosa y un sabor sabroso que tu bebe no podrá resistir.", 'tipo_producto'=> 4,'imagen_producto'=>"churu-carne.jpg"],

            ['nombre_producto'=>"Collar Diseño Gatos",'cantidad_producto'=>1,'precio_producto'=> 1500,'descrip_producto'=>"Collar pequeño con diseño de gatos, uso perfecto para el minino de la casa.", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Gato1.jpeg"],
            ['nombre_producto'=>"Collar Diseño Azul",'cantidad_producto'=>1,'precio_producto'=> 1500,'descrip_producto'=>"Collar pequeño con diseño de gatos, uso perfecto para el minino de la casa", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Gato2.jpeg"],
            ['nombre_producto'=>"Collar Perro Pequeño",'cantidad_producto'=>1,'precio_producto'=> 2000,'descrip_producto'=>"Collar pequeño para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Perro-Chico.jpeg"],

            ['nombre_producto'=>"Collar Perro Mediano",'cantidad_producto'=>1,'precio_producto'=> 3000,'descrip_producto'=>"Collar mediano para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Perro-Mediano.jpeg"],
            ['nombre_producto'=>"Collar Perro Grande",'cantidad_producto'=>1,'precio_producto'=> 4000,'descrip_producto'=>"Collar grande para perro, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Perro-Grande.jpeg"],
            ['nombre_producto'=>"Collar Perro Punk",'cantidad_producto'=>1,'precio_producto'=> 3000,'descrip_producto'=>"Collar para perro con estilo punk, con enganche para correa", 'tipo_producto'=>5,'imagen_producto'=>"Collar-Punk.jpeg"],

            // ['nombre_producto'=>"",'cantidad_producto'=>1,'precio_producto'=> ,'descrip_producto'=>"", 'tipo_producto'=> ,'imagen_producto'=>""]

        ]);
    }
}
