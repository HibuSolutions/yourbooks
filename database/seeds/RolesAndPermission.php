<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         app()['cache']->forget('spatie.permission.cache');

        //////////////permisos para libros	
		Permission::create(['name'=>'editarLibro']);
        Permission::create(['name'=>'agregarLibro']);
        Permission::create(['name'=>'eliminarLibro']);
        Permission::create(['name'=>'listarLibro']);
        //////////////permisos para usuarios
        Permission::create(['name'=>'editarUsuario']);
        Permission::create(['name'=>'agregarUsuario']);
        Permission::create(['name'=>'eliminarUsuario']);
        Permission::create(['name'=>'listarUsuario']);
        //////////////permisos para categorias
        Permission::create(['name'=>'editarCategoria']);
        Permission::create(['name'=>'agregarCategoria']);
        Permission::create(['name'=>'eliminarCategoria']);
        Permission::create(['name'=>'listarCategoria']);

         /////////permiso para acceder al dash
        Permission::create(['name'=>'general']);

        Permission::create(['name'=>'cliente']);

        $role= Role::create(['name'=>'administrador']);
        $role->givePermissionTo(Permission::all());

         $role= Role::create(['name'=>'cliente']);
         $role->givePermissionTo('cliente');

        $role= Role::create(['name'=>'moderador']);
        $role->givePermissionTo('agregarLibro');
        $role->givePermissionTo('editarLibro');
	    $role->givePermissionTo('eliminarLibro');
        $role->givePermissionTo('listarLibro');
        $role->givePermissionTo('agregarCategoria');
        $role->givePermissionTo('editarCategoria');
        $role->givePermissionTo('eliminarCategoria');
        $role->givePermissionTo('listarCategoria');
        $role->givePermissionTo('general');
        

    }
}
