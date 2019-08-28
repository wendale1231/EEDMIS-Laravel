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
        $burial_role->givePermissionTo($permission);
        $ibjt_role->givePermissionTo($permission);
        $public_market_role->givePermissionTo($permission);

        $admin_user = User::first();
        $admin_user->assignRole($admin_role);
        $market_user = User::find(2);
        $market_user->assignRole($public_market_role);

    }
}
