<?php

namespace Database\Seeders;

use App\Models\BusinessStatus;
use Illuminate\Database\Seeder;

class BusinessStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new BusinessStatus();
        $status->name = 'New';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Resubmitted';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Approved by Surveyor';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Approved by Pimpinan';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Rejected';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Ongoing';
        $status->save();
        $status = new BusinessStatus();
        $status->name = 'Finished';
        $status->save();
    }
}
