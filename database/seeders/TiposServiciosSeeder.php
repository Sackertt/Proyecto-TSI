<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_atenciones')->insert([
            ['nombre_atencion'=>"Baño Sanitario",],
            ['nombre_atencion'=>"Baño y Corte pelo",],
            ['nombre_atencion'=>"Baño y Deslanado",],
        ]);
    }
}
