<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_productos')->insert([
            ['nombre_tipo'=>"Ropa",],
            ['nombre_tipo'=>"Camas",],
            ['nombre_tipo'=>"Juguetes",],
            ['nombre_tipo'=>"Snacks",],]);
    }
}
