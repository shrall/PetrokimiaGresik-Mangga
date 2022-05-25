<?php

namespace Database\Seeders;

use App\Models\MheUcode;
use Illuminate\Database\Seeder;

class MheUcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("public/unique.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 6000, ",")) !== FALSE) {
            if (!$firstline) {
                MheUcode::create([
                    'id' => $data['0'],
                    'string' => $data['1'],
                    'status' => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
