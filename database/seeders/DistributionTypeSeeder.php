<?php

namespace Database\Seeders;

use App\Models\DistributionType;
use Illuminate\Database\Seeder;

class DistributionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new DistributionType();
        $type->name = 'Reguler';
        $type->save();

        $type = new DistributionType();
        $type->name = 'Tambahan';
        $type->save();

        $type = new DistributionType();
        $type->name = 'Rekomendasi';
        $type->save();

        $type = new DistributionType();
        $type->name = 'Khusus';
        $type->save();
    }
}
