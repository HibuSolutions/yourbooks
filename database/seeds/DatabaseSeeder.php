<?php

use Illuminate\Database\Seeder;
use App\Categoria;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

            $this->call(RolesAndPermission::class);
            $this->call(UsersTableSeeder::class);
            $this->call(ContactoSeed::class);

    }


}
