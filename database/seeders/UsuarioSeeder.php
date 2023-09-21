<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nome' => 'Icaro',
            'email' => 'iccursosx@gmail.com',
            'password' => Hash::make('senha123'),
            'perfil_usuario' => '1'
        ]);
    }
}
