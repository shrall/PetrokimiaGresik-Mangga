<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BusinessForm;
use App\Models\DistributionType;
use App\Models\District;
use App\Models\EstablishmentStatus;
use App\Models\Marketing;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function create_ajuan()
    {
        return view('user.create_ajuan');
    }

    public function status_ajuan()
    {
        if (Auth::user()->referral_code != 'mamud') {
            $utama = Auth::user()->businesses->whereBetween('status', [1, 2])->first()->utama;
            return view('user.status_ajuan', compact('utama'));
        } else {
            $muda = Auth::user()->businesses->whereBetween('status', [1, 2])->first()->muda;
            return view('user.status_ajuan', compact('muda'));
        }
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
        $sectors = Sector::all();
        $subsectors = Subsector::all();
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $business_forms = BusinessForm::all();
        $establishment_statuses = EstablishmentStatus::all();
        $distribution_types = DistributionType::all();
        $marketings = Marketing::all();
        return view('user.form.mangga', compact('provinces', 'cities', 'districts', 'villages', 'sectors', 'subsectors', 'business_forms', 'establishment_statuses', 'distribution_types', 'marketings'));
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

    public function refresh_kelompok(Request $request)
    {
        $member = $request->member;
        return view('user.form.inc.utama_member', compact('member'));
    }
}
