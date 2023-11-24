<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'label' => 'administrador',
        ]);
        DB::table('roles')->insert([
            'name' => 'Moderador',
            'label' => 'moderador',
        ]);
        DB::table('roles')->insert([
            'name' => 'Usuario',
            'label' => 'usuario',
        ]);
    }

}
