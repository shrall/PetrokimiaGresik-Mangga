<?php

namespace Database\Seeders;

use App\Models\AngsuranStatus;
use Illuminate\Database\Seeder;

class AngsuranStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stat = new AngsuranStatus();
        $stat->name = "Approved";
        $stat->save();

        $stat = new AngsuranStatus();
        $stat->name = "Process";
        $stat->save();

        $stat = new AngsuranStatus();
        $stat->name = "Rejected";
        $stat->save();
    }
}
