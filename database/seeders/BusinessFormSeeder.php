<?php

namespace Database\Seeders;

use App\Models\BusinessForm;
use Illuminate\Database\Seeder;

class BusinessFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = new BusinessForm();
        $form->name = 'Perorangan Berbadan Hukum';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Perorangan Tidak Berbadan Hukum';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Koperasi';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Kelompok';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Organisasi';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Lembaga Pendidikan';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Lembaga Lainnya';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Program Ketahanan Pangan';
        $form->save();

        $form = new BusinessForm();
        $form->name = 'Badan Usaha Milik Desa (BUMDES)';
        $form->save();
    }
}
