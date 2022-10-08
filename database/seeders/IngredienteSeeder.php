<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create(['nombre'=> 'pollo']);
        Ingrediente::create(['nombre'=> 'carne']);
        Ingrediente::create(['nombre'=> 'arroz']);
        Ingrediente::create(['nombre'=> 'queso parmesano']);
        Ingrediente::create(['nombre'=> 'pepino']);
        Ingrediente::create(['nombre'=> 'alga']);
        Ingrediente::create(['nombre'=> 'pan']);
        Ingrediente::create(['nombre'=> 'carne']);
        Ingrediente::create(['nombre'=> 'camaron']);
        Ingrediente::create(['nombre'=> 'papas']);
        Ingrediente::create(['nombre'=> 'zanahoria']);
    }
}
