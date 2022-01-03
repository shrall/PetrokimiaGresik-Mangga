<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('landing_page.home');
    }
    public function info(){
        return view('landing_page.info');
    }
    public function prosedur(){
        return view('landing_page.prosedur');
    }
    public function media(){
        return view('landing_page.media');
    }
    public function toko_mangga(){
        return view('landing_page.toko_mangga');
    }
    public function faq(){
        return view('landing_page.faq');
    }
    public function tentang(){
        return view('landing_page.tentang');
    }
    public function mangga(){
        return view('landing_page.mangga');
    }
    public function mangga_makmur(){
        return view('landing_page.mangga_makmur');
    }
    public function mangga_gadung(){
        return view('landing_page.mangga_gadung');
    }
    public function mangga_golek(){
        return view('landing_page.mangga_golek');
    }
    public function mangga_muda(){
        return view('landing_page.mangga_muda');
    }
    public function mangga_madu(){
        return view('landing_page.mangga_madu');
    }
    public function landasan(){
        return view('landing_page.landasan');
    }
    public function sebaran(){
        return view('landing_page.sebaran');
    }
    public function alur(){
        return view('landing_page.alur');
    }
}
