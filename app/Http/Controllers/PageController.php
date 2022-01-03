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
}
