<?php

namespace Database\Seeders;

use App\Models\MudaType;
use Illuminate\Database\Seeder;

class MudaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new MudaType();
        $type->name = 'Agrosociopreneur';
        $type->save();

        $type = new MudaType();
        $type->name = 'Creativesociopreneur';
        $type->save();
    }
}
