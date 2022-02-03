<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = new People();
        $people->pm_ccm = 'Eko Suroso';
        $people->vp = 'Muhammad Ihwan F.';
        $people->save();
    }
}
