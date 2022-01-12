<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function program()
    {
        return view('admin.program');
    }
    public function mangga_muda()
    {
        return view('admin.program.mangga_muda');
    }
}
