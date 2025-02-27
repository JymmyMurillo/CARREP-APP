<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ActualizarContrasenasSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->update([
            'password_hash' => Hash::make('Prueba'), // Cambia 'Prueba' por la contraseña deseada
        ]);
    }
}