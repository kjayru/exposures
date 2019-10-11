<?php

use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\User::class,10)->create();

        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador general',
        ]);
        Role::create([
            'name' => 'Cliente',
            'slug' => 'client',
            'description' => 'Administrador cliente',
        ]);
       
        Role::create([
            'name' => 'Usuario',
            'slug' => 'usuario',
            'description' => 'usuario',
        ]);
    
    }
}
