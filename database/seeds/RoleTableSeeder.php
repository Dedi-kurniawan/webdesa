<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'create']);
        

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'superadmin']);
        $role->givePermissionTo('edit');
        $role->givePermissionTo('delete');
        $role->givePermissionTo('view');
        $role->givePermissionTo('create');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('edit');
        $role->givePermissionTo('delete');
        $role->givePermissionTo('view');
        $role->givePermissionTo('create');

        $role = Role::create(['name' => 'karyawan']);
        $role->givePermissionTo('view');
    }
}
