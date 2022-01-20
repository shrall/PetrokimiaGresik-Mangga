<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessLog;
use App\Models\Muda;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;

class MudaController extends Controller
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
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function show(Muda $muda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function edit(Muda $muda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muda $muda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muda $muda)
    {
        //
    }
    public function preview(Muda $muda)
    {
        return view('user.proposal.muda', compact('muda'));
    }
    public function download(Muda $muda)
    {
        $pdf = PDF::loadview('user.proposal.muda', compact('muda'))->setOption('margin-bottom', '0mm')
        ->setOption('margin-top', '0mm')
        ->setOption('margin-right', '0mm')
        ->setOption('margin-left', '0mm')
        ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }
    public function approve_surveyor(Muda $muda)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3) {
            $muda->business->update([
                'status' => 3,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,

            ]);
            BusinessLog::create([
                'description' => 'Disetujui (Surveyor) oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
                'business_id' => $muda->business->id,
                'admin_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('admin.program.muda', $muda->business->id);
    }

    public function approve_pimpinan(Muda $muda)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 4) {
            $muda->business->update([
                'status' => 4,
                'approved_by_pimpinan_at' => Carbon::now(),
                'rejected_at' => null,
            ]);
            BusinessLog::create([
                'description' => 'Disetujui (Pimpinan) oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
                'business_id' => $muda->business->id,
                'admin_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('admin.program.muda', $muda->business->id);
    }

    public function reject(Muda $muda)
    {
        $muda->business->update([
            'status' => 0,
            'rejected_at' => Carbon::now(),
        ]);
        BusinessLog::create([
            'description' => 'Ditolak oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'business_id' => $muda->business->id,
            'admin_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.program.muda', $muda->business->id);
    }
}
