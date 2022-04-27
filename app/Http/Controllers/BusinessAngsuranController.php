<?php

namespace App\Http\Controllers;

use App\Models\BusinessAngsuran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $proof = 'mangga-utama-' . time() . '-' . $request['proof']->getClientOriginalName();
        $request->proof->move(public_path('uploads/mangga/proof'), $proof);
        $user = User::find(Auth::id());
        $angsuran = BusinessAngsuran::create([
            'amount' => $request->amount,
            'proof' => $proof,
            'installment_counter' => $request->installment_counter,
            'business_id' => $user->businesses[0]->id,
            'status_id' => 2
        ]);

        return redirect()->route('user.riwayat_angsuran');
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
        //
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
}
