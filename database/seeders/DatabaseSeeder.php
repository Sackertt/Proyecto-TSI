<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TiposProductosSeeder::class,
            TiposPerfilesSeeder::class,
            CuentasSeeder::class,
            TiposServiciosSeeder::class,
        ]);
    }
}
