<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert default areas
        DB::table('areas')->insert([
            ['name' => 'GERENCIA DE RECURSOS HUMANOS', 'description' => 'Area de RRHH'],
            ['name' => 'OFICINA DE TECNOLOGIA E INFORMACIÓN', 'description' => 'Area de sistemas'],
            ['name' => 'SUBGERENCIA DE CONTABILIDAD', 'description' => 'Area de contabilidad'],
            ['name' => 'GERENCIA DE ADMINISTRACIÓN Y FINANZAS', 'description' => 'Area de administración y finanzas'],
        ]);
    }
}
