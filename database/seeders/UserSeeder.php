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
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 1;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();

        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'Mangga';
        $user->email = 'admin@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 2;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();

        $user = new User();
        $user->first_name = 'Andi';
        $user->last_name = 'Budiyanto';
        $user->email = 'usermuda@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 1;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->referral_code = 'mamud';
        $user->save();

        $user = new User();
        $user->first_name = 'Surveyor';
        $user->last_name = 'Mangga';
        $user->email = 'surveyor@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 3;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();

        $user = new User();
        $user->first_name = 'Pimpinan';
        $user->last_name = 'Mangga';
        $user->email = 'pimpinan@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 4;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();

        $user = new User();
        $user->first_name = 'Surveyor';
        $user->last_name = 'Mangga';
        $user->email = 'pgsurveyor@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 3;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();

        $user = new User();
        $user->first_name = 'Pimpinan';
        $user->last_name = 'Mangga';
        $user->email = 'pgpimpinan@mangga.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->handphone = '08123456789';
        $user->ktp_code = '123456789';
        $user->kk_code = '8123456789';
        $user->user_role = 4;
        $user->status = 0;
        $user->province_id = 35;
        $user->city_id = 3578;
        $user->district_id = 3578170;
        $user->village_id = 3578170005;
        $user->save();
    }
}
