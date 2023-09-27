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
            ['rut'=>"12345678-9",'password' =>Hash::make('Admin1234'),'nombre'=>'Administrador','fono'=>'912345678','direccion'=>'Casa Admin','id_perfil'=>1],
            ['rut'=>"98765432-1",'password' =>Hash::make('Usuario1234'),'nombre'=>'Usuario','fono'=>'912345678','direccion'=>'Casa Usuario','id_perfil'=>2],
        ]);
    }
}
