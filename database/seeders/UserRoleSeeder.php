<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new UserRole();
        $role->name = 'User';
        $role->desc = 'Pengguna Mangga';
        $role->status = '1';
        $role->save();

        $role = new UserRole();
        $role->name = 'Superadmin';
        $role->desc = 'Superadmin Mangga';
        $role->status = '1';
        $role->save();

        $role = new UserRole();
        $role->name = 'Surveyor';
        $role->desc = 'Surveyor Mangga';
        $role->status = '1';
        $role->save();

        $role = new UserRole();
        $role->name = 'Pimpinan';
        $role->desc = 'Pimpinan Mangga';
        $role->status = '1';
        $role->save();

        $role = new UserRole();
        $role->name = 'Admin Keuangan';
        $role->desc = 'Admin Keuangan Mangga';
        $role->status = '1';
        $role->save();
    }
}
