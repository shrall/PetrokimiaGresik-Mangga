<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $village = new Village();
        $village->id = 3502080016;
        $village->district_id = 3502080;
        $village->name = "NGUNUT";
        $village->save();

        $village = new Village();
        $village->id = 3520030011;
        $village->district_id = 3520030;
        $village->name = "PUPUS";
        $village->save();

        $village = new Village();
        $village->id = 3316070012;
        $village->district_id = 3316070;
        $village->name = "NGLEBUR";
        $village->save();

        $village = new Village();
        $village->id = 3316060011;
        $village->district_id = 3316060;
        $village->name = "TEMENGENG";
        $village->save();

        $village = new Village();
        $village->id = 3520050024;
        $village->district_id = 3520050;
        $village->name = "NGUNUT";
        $village->save();

        $village = new Village();
        $village->id = 3518090014;
        $village->district_id = 3518090;
        $village->name = "DRENGES";
        $village->save();

        $village = new Village();
        $village->id = 3519050015;
        $village->district_id = 3518090;
        $village->name = "WUNGU";
        $village->save();
    }
}
