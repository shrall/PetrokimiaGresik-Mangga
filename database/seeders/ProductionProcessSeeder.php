<?php

namespace Database\Seeders;

use App\Models\ProductionProcess;
use Illuminate\Database\Seeder;

class ProductionProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new ProductionProcess();
        $status->name = 'Manual';
        $status->save();

        $status = new ProductionProcess();
        $status->name = 'Mekanik';
        $status->save();

        $status = new ProductionProcess();
        $status->name = 'Modern';
        $status->save();
    }
}
