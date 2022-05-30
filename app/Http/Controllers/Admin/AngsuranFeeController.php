<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AngsuranFee;
use Illuminate\Http\Request;

class AngsuranFeeController extends Controller
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
     * @param  \App\Models\AngsuranFee  $angsuranFee
     * @return \Illuminate\Http\Response
     */
    public function show(AngsuranFee $angsuranFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AngsuranFee  $angsuranFee
     * @return \Illuminate\Http\Response
     */
    public function edit(AngsuranFee $angsuranFee)
    {
        return view('admin.angsuran_fee.edit', compact('angsuranFee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AngsuranFee  $angsuranFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AngsuranFee $angsuranFee)
    {
        $angsuranFee->update([
            'service_fee' => $request->service_fee
        ]);

        return redirect()->route('admin.program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AngsuranFee  $angsuranFee
     * @return \Illuminate\Http\Response
     */
    public function destroy(AngsuranFee $angsuranFee)
    {
        //
    }
}
