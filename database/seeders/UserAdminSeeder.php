<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert an admin user
        DB::table('users')->insert([
            'username' => 'Admin',
            'name' => 'Administrador',
            'paternal_surname' => 'Paterno',
            'maternal_surname' => 'Materno',
            'dni' => '12345678',
            'cui' => '1',
            'password' => bcrypt('adminpassword'),
            'post_id' => 1, // Assuming 1 is the ID for the admin
            'area_id' => 1, // Assuming 1 is the ID for the admin area
            'state_id' => 1, // Assuming 1 is the ID for the active
            'email' => 'admin@example.com',
        ]);
    }
}
