<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\District;
use App\Models\EmployeeDepartment;
use App\Models\MheEvent;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\Village;
use Illuminate\Http\Request;
use \PDF;

class PageController extends Controller
{
    public function home()
    {
        $event = MheEvent::first();
        return view('landing_page.home', compact('event'));
    }
    public function info()
    {
        return view('landing_page.info');
    }
    public function prosedur()
    {
        return view('landing_page.prosedur');
    }
    public function media()
    {
        return view('landing_page.media');
    }
    public function toko_mangga()
    {
        $businesses = Business::where('business_status_id', '>', 3)
            ->where('business_status_id', '!=', 5)->whereHas('utama')->paginate(6);
        return view('landing_page.toko_mangga', compact('businesses'));
    }
    public function faq()
    {
        return view('landing_page.faq');
    }
    public function tentang()
    {
        return view('landing_page.tentang');
    }
    public function mangga()
    {
        return view('landing_page.mangga');
    }
    public function mangga_makmur()
    {
        return view('landing_page.mangga_makmur');
    }
    public function mangga_gadung()
    {
        return view('landing_page.mangga_gadung');
    }
    public function mangga_golek()
    {
        return view('landing_page.mangga_golek');
    }
    public function mangga_muda()
    {
        return view('landing_page.mangga_muda');
    }
    public function mangga_madu()
    {
        return view('landing_page.mangga_madu');
    }
    public function landasan()
    {
        return view('landing_page.landasan');
    }
    public function sebaran()
    {
        return view('landing_page.sebaran');
    }
    public function alur()
    {
        return view('landing_page.alur');
    }
    public function checkPDF()
    {
        $pdf = PDF::loadview('proposal')->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }

    //mangga muda
    public function mangga_muda_register()
    {
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        return view('mangga_muda.register', compact('provinces', 'cities', 'districts', 'villages'));
    }

    public function mangga_muda_login()
    {
        return view('mangga_muda.login');
    }

    public function mangga_muda_home()
    {
        return view('mangga_muda.landing_page');
    }
    //madu
    public function mangga_madu_register()
    {
        $departments = EmployeeDepartment::all();
        return view('mangga_madu.register', compact('departments'));
    }

    public function mangga_madu_login()
    {
        return view('mangga_madu.login');
    }
    public function mhe_home()
    {
        return view('mhe.home');
    }
    public function mhe_register()
    {
        $event = MheEvent::first();
        return view('mhe.register', compact('event'));
    }
    public function mhe_success()
    {
        return view('mhe.success');
    }
}
