<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mascotas')->insert([
            ['nombre_mascota'=>"Omen",'tamaño_mascota'=> 'Mediano','especie_mascota'=>'Gato','rut'=>'22430508-7'],
            ['nombre_mascota'=>"Duki",'tamaño_mascota'=> 'Pequeño','especie_mascota'=>'Gato','rut'=>'22430508-7'],
            ['nombre_mascota'=>"Yoshi",'tamaño_mascota'=> 'Mediano','especie_mascota'=>'Perro','rut'=>'22430508-7'],
            ['nombre_mascota'=>"Tomas",'tamaño_mascota'=> 'Pequeño','especie_mascota'=>'Perro','rut'=>'21603763-3'],
            ['nombre_mascota'=>"Cristian",'tamaño_mascota'=> 'Grande','especie_mascota'=>'Perro','rut'=>'21603763-3'],
        ]);
    }
}
