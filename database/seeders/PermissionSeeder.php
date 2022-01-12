<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Servicios'
        ]);

        Permission::create([
            'name' => 'Leer Servicios'
        ]);

        Permission::create([
            'name' => 'Actualizar Servicios'
        ]);

        Permission::create([
            'name' => 'Eliminar Servicios'
        ]);

        Permission::create([
            'name' => 'Ver Dashboard'
        ]);

        Permission::create([
            'name' => 'Crear role'
        ]);

        Permission::create([
            'name' => 'Listar role'
        ]);

        Permission::create([
            'name' => 'Editar role'
        ]);

        Permission::create([
            'name' => 'Eliminar role'
        ]);

        Permission::create([
            'name' => 'Leer usuarios'
        ]);

        Permission::create([
            'name' => 'Editar usuarios'
        ]);
    }
}
