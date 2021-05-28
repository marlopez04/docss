<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FuerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fueros')->insert([
			'descripcion'     => 'civil',
			'centro'    => 'CAP'
			]);
        DB::table('fueros')->insert([
                'descripcion'     => 'penal',
                'centro'    => 'CAP'
                ]);
    }
}
