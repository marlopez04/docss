<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fuero;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //FUEROS
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

        //USUARIOS
        $usuario = new User();
        $usuario->name = "miguel";
        $usuario->email = "pingooooooo@gmail.com";
        $usuario->password = "1234",
        $usuario->tipo = "1",
        $usuario->id_oficina = "1"

        $usuario = new User();
        $usuario->name = "martin";
        $usuario->email = "pingooooooo1@gmail.com";
        $usuario->password = "1234",
        $usuario->tipo = "1",
        $usuario->id_oficina = "1"


    }
}
