<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleTableSeeder extends Seeder
{

    public function run()
    {

        Role::create([
            'id' => 1,
            'name' => 'SuperAdmin'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'Administrador'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Editores de documentos'
        ]);
        Role::create([
            'id' => 4,
            'name' => 'Atención a Clientes'
        ]);
        Role::create([
            'id' => 5,
            'name' => 'Administrador corporativo'
        ]);
        Role::create([
            'id' => 6,
            'name' => 'Usuario Corporativo'
        ]);

    }

}