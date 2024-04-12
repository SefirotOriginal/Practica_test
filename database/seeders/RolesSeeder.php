<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles =[
            'sudo',
            'admin',
            'visitor'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        
        $permissions = [
            'ver persona',
            'crear persona', 
            'editar persona',
            'eliminar persona',
            'ver rol', 
            'ver profesion',
            'crear profesion', 
            'editar profesion',
            'eliminar profesion',
            'ver rol', 
            'crear rol',
            'editar rol',
            'eliminar rol',
            'ver usuario',
            'crear usuario',
            'editar usuario',
            'eliminar usuario',
        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::findByName('sudo');
        $role->givePermissionTo(Permission::all());
    }
}
