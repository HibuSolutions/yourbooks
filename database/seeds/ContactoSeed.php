<?php

use Illuminate\Database\Seeder;
use App\Contacto;
use App\Intro;
class ContactoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $contactos = Contacto::create([
        	'txt1'=>'Hola bienvenido a yourbooks',
        	'txt2'=>'ayudame siguiendome en mis redes sociales te lo agradecere',
        	'img'=>('contacto/captura.jpg'),
            'yt'=>'aqui tu canal de yt',
            'fb'=>'aqui tu facebook',
            'in'=>'aqui tu instagram',


        ]);

            $contactos = Intro::create([
            'txt1'=>'Hola bienvenido a yourbooks',
            'txt2'=>'ayudame siguiendome en mis redes sociales te lo agradecere',
            


        ]);
    }
}
