<?php

namespace Database\Seeders;

use App\Models\FinanceRecord;
use Illuminate\Database\Seeder;

class FinanceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new FinanceRecord();
        $status->name = 'Buku Harian';
        $status->save();

        $status = new FinanceRecord();
        $status->name = 'Neraca/Laba Rugi';
        $status->save();
    }
}
