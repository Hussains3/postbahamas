<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Dummy',
            'last_name' => 'User',
            'email' => 'user@gmail.com',
            'phone' => '012345678946',
            'nib_number' => '123456785',
            'password' => Hash::make('user123')

        ]);

        $adminuser = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '012345678945',
            'nib_number' => '123456789',
            'password' => Hash::make('admin123')

        ]);

        $permissions = Permission::pluck('id','id')->all();


        $adminrole = Role::create(['name' => 'admin']);
        $userrole = Role::create(['name' => 'user']);


        $adminrole->syncPermissions($permissions);
        $userrole->syncPermissions($permissions);

        $adminuser->assignRole([$adminrole->id]);
        $user->assignRole([$userrole->id]);
    }
}
