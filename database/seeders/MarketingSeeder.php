<?php

namespace Database\Seeders;

use App\Models\Marketing;
use Illuminate\Database\Seeder;

class MarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marketing = new Marketing();
        $marketing->name = 'Lokal';
        $marketing->save();

        $marketing = new Marketing();
        $marketing->name = 'Antar Provinsi';
        $marketing->save();

        $marketing = new Marketing();
        $marketing->name = 'Ekspor';
        $marketing->save();
    }
}
