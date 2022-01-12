<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sector = new Sector();
        $sector->name = 'Industri';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Perikanan';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Pertanian';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Jasa';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Perdagangan';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Peternakan';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Khusus';
        $sector->save();

        $sector = new Sector();
        $sector->name = 'Perkebunan';
        $sector->save();
    }
}
