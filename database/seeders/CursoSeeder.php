<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('cursos')->insert(
            ['nombre' => 'Mecanismos del automovil anio 1']
        );
        DB::table('cursos')->insert(
            ['nombre' => 'Mecanica Automotriz anio 2']
        );

    }
}
