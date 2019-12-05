<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $administrador = User::create([
        	'name'=>'administrador',
        	'email'=>'admin@yourbooks.com',
        	'password'=>bcrypt('2020'),
            'pass'=>'2020',


        ]);

        $administrador->assignRole('administrador');

        $moderador = User::create([
        	'name'=>'moderador',
        	'email'=>'moderador@yourbooks.com',
        	'password'=>bcrypt('2020'),
            'pass'=>'2020',


        ]);

        $moderador->assignRole('moderador');

    }
}
