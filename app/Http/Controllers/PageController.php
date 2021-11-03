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
}
