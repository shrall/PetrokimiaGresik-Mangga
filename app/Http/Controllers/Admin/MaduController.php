<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Madu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function show(Madu $madu)
    {
        return view('admin.mangga.madu', compact('madu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function edit(Madu $madu)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Madu $madu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madu  $madu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madu $madu)
    {
        $madu->delete();
        return redirect()->route('admin.program');
    }
    public function approve_surveyor(Madu $madu)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3) {
            $madu->update([
                'status' => 4,
                'business_status_id' => 4,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,

            ]);
            // BusinessLog::create([
            //     'description' => 'Disetujui oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
            //     'business_id' => $madu->id,
            //     'admin_id' => Auth::user()->id
            // ]);
        }
        return redirect()->route('admin.madu.show', $madu->id);
    }

    public function reject(Madu $madu)
    {
        $madu->update([
            'status' => 5,
            'business_status_id' => 5,
            'rejected_at' => Carbon::now(),
        ]);
        // BusinessLog::create([
        //     'description' => 'Ditolak oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
        //     'business_id' => $madu->id,
        //     'admin_id' => Auth::user()->id
        // ]);
        return redirect()->route('admin.madu.show', $madu->id);
    }
}
