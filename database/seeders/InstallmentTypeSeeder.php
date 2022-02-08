<?php

namespace Database\Seeders;

use App\Models\InstallmentType;
use Illuminate\Database\Seeder;

class InstallmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new InstallmentType();
        $status->name = 'Angsuran (AN)';
        $status->save();

        $status = new InstallmentType();
        $status->name = 'Yarnen (YN)';
        $status->save();
    }
}
