<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = 'Andi';
        $user->last_name = 'Budiyanto';
        $user->email = 'user@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->no_handphone = '08123456789';
        $user->identity_id = '123456789';
        $user->fam_card_code = '8123456789';
        $user->user_role = 1;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3518010;
        $user->save();
    }
}
