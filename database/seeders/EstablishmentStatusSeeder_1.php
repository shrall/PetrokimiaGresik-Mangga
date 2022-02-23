<?php

namespace Database\Seeders;

use App\Models\EstablishmentStatus;
use Illuminate\Database\Seeder;

class EstablishmentStatusSeeder_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new EstablishmentStatus();
        $status->name = 'Penggarap';
        $status->save();
    }
}
