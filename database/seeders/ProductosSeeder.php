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
            ['nombre_producto'=>"Cama mediana",'cantidad_producto'=>1,'precio_producto'=>15000,'descrip_producto'=>"Cama reversible invierno/verano, tamaño ajustable.", 'tipo_producto'=>2,'imagen_producto'=>"Cama1.png"],
            ['nombre_producto'=>"Buzos",'cantidad_producto'=>1,'precio_producto'=> 0,'descrip_producto'=>"Buzos para mascotas. Talla 4 : 4000", 'tipo_producto'=>1,'imagen_producto'=>"Ropita1.png"],
        ]);
    }
}
