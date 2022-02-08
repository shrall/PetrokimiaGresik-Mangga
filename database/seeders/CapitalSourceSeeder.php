<?php

namespace Database\Seeders;

use App\Models\CapitalSource;
use Illuminate\Database\Seeder;

class CapitalSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new CapitalSource();
        $status->name = 'Modal Sendiri';
        $status->save();

        $status = new CapitalSource();
        $status->name = 'Bank';
        $status->save();

        $status = new CapitalSource();
        $status->name = 'BUMN Lain';
        $status->save();
    }
}
