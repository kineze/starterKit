<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'SuperAdmin']);
        $admin = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'Manage Users']);
        Permission::create(['name' => 'Access superAdmin Dashboard']);

        $superAdmin->givePermissionTo('Access superAdmin Dashboard');
        $superAdmin->givePermissionTo('Manage Users');
    }
}
