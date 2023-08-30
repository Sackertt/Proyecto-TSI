<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposPerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_perfiles')->insert([
            ['nombre_perfil'=>"Administrador",],
            ['nombre_perfil'=>"Usuario",],
        ]);
    }
}
