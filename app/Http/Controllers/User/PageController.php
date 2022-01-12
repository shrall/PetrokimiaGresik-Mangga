<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\Village;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create_ajuan()
    {
        return view('user.create_ajuan');
    }

    public function status_ajuan()
    {
        return view('user.status_ajuan');
    }

    public function riwayat_angsuran()
    {
        return view('user.riwayat_angsuran');
    }

    public function belanja()
    {
        return view('user.belanja');
    }

    public function belanja_list()
    {
        return view('user.belanja_list');
    }

    public function belanja_checkout()
    {
        return view('user.belanja_checkout');
    }

    public function belanja_success()
    {
        return view('user.belanja_success');
    }

    public function form_mangga()
    {
        return view('user.form.mangga');
    }

    public function form_mangga_muda()
    {
        $sectors = Sector::all();
        $subsectors = Subsector::all();
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        return view('user.form.mangga_muda', compact('provinces', 'cities', 'districts', 'villages', 'sectors', 'subsectors'));
    }
}
