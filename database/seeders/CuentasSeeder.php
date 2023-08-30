<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['rut'=>"21549601-5",'password' =>Hash::make('Joaking'),'nombre'=>'Joaquin','fono'=>'976710061','direccion'=>'Calle Falsa 123','id_perfil'=>1],
            ['rut'=>"22430508-5",'password' =>Hash::make('Messi'),'nombre'=>'Leonel','fono'=>'976710061','direccion'=>'Calle Falsa 123','id_perfil'=>2],
        ]);
    }
}
