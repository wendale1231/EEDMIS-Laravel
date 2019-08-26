<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create(['name' => 'admin']);
        $burial_role = Role::create(['name' => 'burial']);
        $ibjt_role = Role::create(['name' => 'ibjt']);
        $public_market_role = Role::create(['name' => 'public_market']);

        $permission = Permission::create(['name' => 'edit all']);

        $admin_role->givePermissionTo($permission);

        $user = User::first();
        $user->assignRole($admin_role);

    }
}
