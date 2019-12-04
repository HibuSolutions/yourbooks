<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $administrador = User::create([
        	'name'=>'administrador',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt('2020'),
            'pass'=>'2020',


        ]);

     
    }
}
