<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Seeder;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new MediaType();
        $type->name = 'Pengumuman';
        $type->save();

        $type = new MediaType();
        $type->name = 'Galeri';
        $type->save();

        $type = new MediaType();
        $type->name = 'Artikel';
        $type->save();

        $type = new MediaType();
        $type->name = 'Penghargaan';
        $type->save();
    }
}
