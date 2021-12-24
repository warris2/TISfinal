<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emp1=Empresa::create([
            'id' => '100000',
            'nombre_empresa'=> 'AssureSoft',
            'nombre_corto'=> 'AST',
            'tipo_empresa'=> 'Limitada',
            'rep_empresa'=> 'Evo Morales Ayma',
            'email_empresa'=> 'assuresoft@assure.com',
            'direccion'=> 'av America esq potosi',
            'telf_empresa'=> '67842513',
            'socios'=> 'ninguno',
        ]);
        $emp1=Empresa::create([
            'id' => '100001',
            'nombre_empresa'=> 'Jalasoft',
            'nombre_corto'=> 'JST',
            'tipo_empresa'=> 'Limitada',
            'rep_empresa'=> 'Marcelo Condori',
            'email_empresa'=> 'jalasoft@jala.com',
            'direccion'=> 'av Libertador',
            'telf_empresa'=> '12345678',
            'socios'=> 'ninguno',
        ]);
        
        $adminUser=User::create([
            'name' => 'admin',
            'apellidos' => 'TIS',
            'cod_sis' => '201802584',
            'num_telefono' => '67524813',
            'tipo' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $adminUser2=User::create([
            'name' => 'admin',
            'apellidos' => 'TIS',
            'cod_sis' => '201802585',
            'num_telefono' => '67524814',
            'tipo' => '1',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('adminadmin'),
        ]);
        $comunUser=User::create([
            'name' => 'Comun',
            'apellidos' => 'User',
            'cod_sis' => '201802585',
            'num_telefono' => '67524814',
            'tipo' => '2',
            'email' => 'comunuser@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $comunUser2=User::create([
            'name' => 'Comun2',
            'apellidos' => 'User',
            'cod_sis' => '201802586',
            'num_telefono' => '67524815',
            'tipo' => '2',
            'email' => 'comunuser2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $groupuser=User::create([
            'name' => 'Comun2',
            'apellidos' => 'User',
            'cod_sis' => '201802586',
            'num_telefono' => '67524815',
            'tipo' => '3',
            'email' => 'assuresoft@assure.com',
            'password' => Hash::make('12345678'),
            'id_grupo' => '100000',
        ]);
        $groupuser1=User::create([
            'name' => 'Comun2',
            'apellidos' => 'User',
            'cod_sis' => '201802586',
            'num_telefono' => '67524815',
            'tipo' => '3',
            'email' => 'jalasoft@jala.com',
            'password' => Hash::make('12345678'),
            'id_grupo' => '100001',
        ]);
    }
}
