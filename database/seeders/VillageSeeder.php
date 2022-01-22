<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $village = new Village();
        $village->id = 3578010004;
        $village->district_id = 3578010;
        $village->name = "KEDURUS";
        $village->save();
    }
}
