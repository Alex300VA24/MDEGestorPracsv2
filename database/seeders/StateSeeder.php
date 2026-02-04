<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert default states
        DB::table('states')->insert([
            ['name' => 'ACTIVO', 'abbreviation' => 'ACT', 'applicable_entity' => 'Usuario'],
            ['name' => 'INACTIVO', 'abbreviation' => 'INA', 'applicable_entity' => 'Usuario'],
            ['name' => 'PENDIENTE', 'abbreviation' => 'PEN', 'applicable_entity' => 'Practicante'],
            ['name' => 'VIGENTE', 'abbreviation' => 'VIG', 'applicable_entity' => 'Practicante'],
            ['name' => 'FINALIZADO', 'abbreviation' => 'FIN', 'applicable_entity' => 'Practicante'],
            ['name' => 'RECHAZADO', 'abbreviation' => 'RECH', 'applicable_entity' => 'Practicante'],
            ['name' => 'EN REVISION', 'abbreviation' => 'ENR', 'applicable_entity' => 'Solicitud'],
            ['name' => 'APROBADO', 'abbreviation' => 'APR', 'applicable_entity' => 'Solicitud'],
            ['name' => 'NEGADO', 'abbreviation' => 'NEG', 'applicable_entity' => 'Solicitud'],
        ]);
    }
}
