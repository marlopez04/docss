<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fuero;

class FuerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuero = new Fuero();
        $fuero->descripcion = "Civil";
        $fuero->save();

        $fuero = new Fuero();
        $fuero->descripcion = "Penal";
        $fuero->save();

        $fuero = new Fuero();
        $fuero->descripcion = "Apremios";
        $fuero->save();

        $fuero = new Fuero();
        $fuero->descripcion = "Documentos";
        $fuero->save();

        $fuero = new Fuero();
        $fuero->descripcion = "Laboral";
        $fuero->save();

        
    }
}
