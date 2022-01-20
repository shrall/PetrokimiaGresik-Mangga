<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Muda;
use App\Models\Utama;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function program()
    {
        $businesses = Business::all();
        return view('admin.program', compact('businesses'));
    }
    public function mangga_muda(Business $business)
    {
        $muda = $business->muda;
        return view('admin.mangga.muda', compact('muda'));
    }
    public function mangga_utama(Business $business)
    {
        $utama = $business->utama;
        return view('admin.mangga.utama', compact('utama'));
    }
}
