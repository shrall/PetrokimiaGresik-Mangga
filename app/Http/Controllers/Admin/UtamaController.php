<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessLog;
use App\Models\People;
use App\Models\Utama;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;

class UtamaController extends Controller
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
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function show(Utama $utama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function edit(Utama $utama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utama $utama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utama $utama)
    {
        //
    }

    public function preview(Utama $utama)
    {
        $people = People::first();
        return view('user.proposal.utama', compact('utama', 'people'));
    }
    public function download(Utama $utama)
    {
        $people = People::first();
        $pdf = PDF::loadview('user.proposal.utama', compact('utama', 'people'))->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }

    public function ttd(Request $request, Utama $utama)
    {
        $complete_form = 'mangga-utama-' . time() . '-' . $request['complete_form']->getClientOriginalName();
        $request->complete_form->move(public_path('uploads/mangga/complete_form'), $complete_form);

        $utama->update([
            'complete_form' => $complete_form
        ]);

        $utama->business->update([
            'status' => 2,
            'business_status_id' => 2
        ]);

        return redirect()->route('admin.program.utama', $utama->business->id);
    }

    public function approve_pimpinan(Utama $utama)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 4) {
            $utama->business->update([
                'status' => 4,
                'business_status_id' => 4,
                'approved_by_pimpinan_at' => Carbon::now(),
                'rejected_at' => null,
            ]);
            BusinessLog::create([
                'description' => 'Disetujui (Pimpinan) oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
                'business_id' => $utama->business->id,
                'admin_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('admin.program.utama', $utama->business->id);
    }

    public function reject(Utama $utama)
    {
        $utama->business->update([
            'status' => 5,
            'business_status_id' => 5,
            'rejected_at' => Carbon::now(),
        ]);
        BusinessLog::create([
            'description' => 'Ditolak oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'business_id' => $utama->business->id,
            'admin_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.program.utama', $utama->business->id);
    }
}
