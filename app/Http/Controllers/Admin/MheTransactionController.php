<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MheApproveMail;
use App\Models\MheTransaction;
use App\Models\MheUcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MheTransactionController extends Controller
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
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(MheTransaction $mheTransaction)
    {
        if ($mheTransaction->ucode->status == 1) {
            $mheTransaction->update([
                'mhe_ucode_id' => MheUcode::where('status', 0)->inRandomOrder()->first()->id,
            ]);
        }
        if ($mheTransaction->is_online == 1) {
            $mheTransaction->ucode->update([
                'status' => 1
            ]);
        }
        $mheTransaction->update([
            'is_approved' => 1
        ]);
        if ($mheTransaction->is_online == 1) {
            Mail::to($mheTransaction->attendee_email)->send(new MheApproveMail($mheTransaction->ucode->string, $mheTransaction->is_online));
        }else{
            Mail::to($mheTransaction->attendee_email)->send(new MheApproveMail($mheTransaction->reference_code, $mheTransaction->is_online));
        }
        return redirect()->route('admin.mhe_event.show', $mheTransaction->mhe_event_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(MheTransaction $mheTransaction)
    {
        $mheTransaction->update([
            'is_approved' => 2
        ]);
        return redirect()->route('admin.mhe_event.show', $mheTransaction->mhe_event_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MheTransaction $mheTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(MheTransaction $mheTransaction)
    {
        //
    }
}
