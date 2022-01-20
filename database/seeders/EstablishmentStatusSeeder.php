<?php

namespace Database\Seeders;

use App\Models\EstablishmentStatus;
use Illuminate\Database\Seeder;

class EstablishmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new EstablishmentStatus();
        $status->name = 'Milik Sendiri';
        $status->save();

        $status = new EstablishmentStatus();
        $status->name = 'Sewa atau Kontrak';
        $status->save();

        $status = new EstablishmentStatus();
        $status->name = 'Keluarga';
        $status->save();
    }
}
