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
    }
}
