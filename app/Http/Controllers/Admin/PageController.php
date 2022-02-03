<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Muda;
use App\Models\People;
use App\Models\User;
use App\Models\Utama;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $businesses = Business::all();
        $users = User::all();
        return view('admin.dashboard', compact('businesses', 'users'));
    }
    public function program()
    {
        $people = People::first();
        $businesses = Business::all();
        return view('admin.program', compact('businesses', 'people'));
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
