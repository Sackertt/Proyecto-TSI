<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorasEsteticasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('horas_esteticas')->insert([
            ['rut'=>"22430508-7",'tipo_servicio'=> 1 ,'fecha_servicio'=> '2023-11-30','hora_servicio'=>'10:00','id_mascota'=>1],
            ['rut'=>"21603763-3",'tipo_servicio'=> 3 ,'fecha_servicio'=> '2023-12-03','hora_servicio'=>'14:00','id_mascota'=>4],
            ['rut'=>"22430508-7",'tipo_servicio'=> 1 ,'fecha_servicio'=> '2023-11-28','hora_servicio'=>'08:00','id_mascota'=>2],
            ['rut'=>"22430508-7",'tipo_servicio'=> 3 ,'fecha_servicio'=>'2023-11-27','hora_servicio'=>'16:00','id_mascota'=>3],
            ['rut'=>"21603763-3",'tipo_servicio'=> 2 ,'fecha_servicio'=> '2023-11-09','hora_servicio'=>'16:00','id_mascota'=>5],
            
            ['rut'=>"22430508-7",'tipo_servicio'=> 1 ,'fecha_servicio'=> '2023-12-20','hora_servicio'=>'08:00','id_mascota'=>2],

            ['rut'=>"22430508-7",'tipo_servicio'=> 3 ,'fecha_servicio'=>'2023-12-27','hora_servicio'=>'16:00','id_mascota'=>3],
            ['rut'=>"21603763-3",'tipo_servicio'=> 2 ,'fecha_servicio'=> '2023-12-27','hora_servicio'=>'14:00','id_mascota'=>5],
            ['rut'=>"22430508-7",'tipo_servicio'=> 1 ,'fecha_servicio'=> '2023-12-27','hora_servicio'=>'12:00','id_mascota'=>1],
            ['rut'=>"21603763-3",'tipo_servicio'=> 3 ,'fecha_servicio'=> '2023-12-27','hora_servicio'=>'10:00','id_mascota'=>4],
            ['rut'=>"22430508-7",'tipo_servicio'=> 3 ,'fecha_servicio'=>'2023-12-27','hora_servicio'=>'08:00','id_mascota'=>3],

        ]);
    }
}
