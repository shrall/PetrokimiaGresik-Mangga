<?php

namespace Database\Seeders;

use App\Models\AngsuranFee;
use Illuminate\Database\Seeder;

class AngsuranFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $af = new AngsuranFee();
        $af->service_fee = 6.0;
        $af->save();
    }
}
