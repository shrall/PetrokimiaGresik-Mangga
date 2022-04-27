<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessAngsuran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusinessAngsuranController extends Controller
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
     * @param  \App\Models\BusinessAngsuran  $businessAngsuran
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessAngsuran $businessAngsuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessAngsuran  $businessAngsuran
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessAngsuran $businessAngsuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessAngsuran  $businessAngsuran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessAngsuran $businessAngsuran)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessAngsuran  $businessAngsuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessAngsuran $businessAngsuran)
    {
        //
    }

    public function approve(BusinessAngsuran $businessAngsuran)
    {
        $businessAngsuran->update([
            'status_id' => 1,
            'approved_at' => Carbon::now()
        ]);
        return redirect()->route('admin.program.utama', $businessAngsuran->business->id);
    }
    public function reject(BusinessAngsuran $businessAngsuran)
    {
        $businessAngsuran->update([
            'status_id' => 3
        ]);
        return redirect()->route('admin.program.utama', $businessAngsuran->business->id);
    }
}
