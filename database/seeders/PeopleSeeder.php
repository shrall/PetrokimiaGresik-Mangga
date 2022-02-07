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
        $people->one = 'Eko Suroso';
        $people->two = 'Muhammad Ihwan F.';
        $people->one_title = 'PM CCM';
        $people->two_title = 'VP CSR';
        $people->save();
    }
}
