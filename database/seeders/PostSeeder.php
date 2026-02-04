<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert default posts
        DB::table('posts')->insert([
            ['name' => 'ADMINISTRADOR RECURSOS HUMANOS', 'description' => 'Encargado de RRHH'],
            ['name' => 'ADMINISTRADOR DE AREA', 'description' => 'Encargado'],
            ['name' => 'USUARIO DE AREA', 'description' => 'Usuario'],
            ['name' => 'ADMINISTRADOR DE SISTEMAS ', 'description' => 'Encargado de sistemas'],
        ]);
    }
}
