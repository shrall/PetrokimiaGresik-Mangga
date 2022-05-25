<?php

namespace Database\Seeders;

use App\Models\MheEvent;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MheEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new MheEvent();
        $event->name = "Mangga Hybrid Expo 2022";
        $event->start = Carbon::now();
        $event->end = Carbon::now()->addYear();
        $event->desc = "Mangga Hybrid Expo Oleh PT Petrokimia Gresik";
        $event->status = 1;
        $event->save();
    }
}
