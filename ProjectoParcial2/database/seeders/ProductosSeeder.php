<?php

namespace Database\Seeders;
use App\Models\Productos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
            'codigo' => 'CD123',
            'descripcion' => 'Chilo',
            'cantidad' => 12,
            'precio' => 2.5,
        ]);
    }
}
