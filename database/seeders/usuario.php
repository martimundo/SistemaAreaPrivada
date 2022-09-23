<?php

namespace Database\Seeders;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $usuario = new ModelsUsuario();
        $usuario->usuario = 'admin@bol.com.br';
        $usuario->senha = Hash::make('987654');

        $usuario->save();
        echo "Usuário cadatrado";        
       
    }
}
