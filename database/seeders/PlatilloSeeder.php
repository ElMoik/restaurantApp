<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre'=> 'Sushi', 'precio' => 100.00, 'categoria_id' => 1]);
        Platillo::create(['nombre'=> 'Pizza', 'precio' => 150.00, 'categoria_id' => 1]);
        Platillo::create(['nombre'=> 'Hamburguesa', 'precio' => 180.00, 'categoria_id' => 2]);
        Platillo::create(['nombre'=> 'Tostada de ceviche', 'precio' => 70.00, 'categoria_id' => 2]);
        Platillo::create(['nombre'=> 'Nuggets', 'precio' => 60.00, 'categoria_id' => 3]);
        Platillo::create(['nombre'=> 'Sopita de pollo', 'precio' => 65.00, 'categoria_id' => 3]);
    }
}
