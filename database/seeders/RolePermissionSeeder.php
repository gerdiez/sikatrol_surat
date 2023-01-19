<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $permission = Permission::create(['name' => 'edit articles']);
        // $permission = Permission::create(['name' => 'edit articles']);
        // $permission = Permission::create(['name' => 'edit articles']);
        // Role::create(['name' => 'tata'])->givePermissionTo(['create', 'update', 'delete']);
        // Role::create(['name' => 'unit'])->givePermissionTo(['create unit', 'update unit', 'delete unit']);
        // Role::create(['name' => 'sekre'])->givePermissionTo(['update sekre']);
        Role::create([
            'name' => 'tata',
        ])->givePermissionTo(
            Permission::create([
                'name' => 'tata usaha'
            ])
        );

        Role::create([
            'name' => 'unit',
        ])->givePermissionTo(
            Permission::create([
                'name' => 'unit kerja'
            ])
        );

        Role::create([
            'name' => 'sekre',
        ])->givePermissionTo(
            Permission::create([
                'name' => 'sekretaris'
            ])
        );
    }
}
