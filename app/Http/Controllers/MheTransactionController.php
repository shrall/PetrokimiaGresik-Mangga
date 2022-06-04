<?php

namespace App\Http\Controllers;

use App\Models\MheEvent;
use App\Models\MheTransaction;
use App\Models\MheUcode;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

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
        $evidence = 'mhe-' . time() . '-' . $request['evidence']->getClientOriginalName();
        $request->evidence->move(public_path('uploads/mhe'), $evidence);

        $event = MheEvent::first();
        for ($i = 0; $i < $request->ticket_amount; $i++) {
            $ucode = MheUcode::where('status', 0)->inRandomOrder()->first();
            MheTransaction::create([
                'attendee_name' => $request->name,
                'attendee_email' => $request->email,
                'attendee_phone' => $request->phone,
                'reference_code' => $request->reference_id,
                'ticket_amount' => $request->ticket_amount,
                'evidence' => $evidence,
                'mhe_event_id' => $event->id,
                'mhe_ucode_id' => $ucode->id
            ]);
        }

        return redirect()->route('mhe.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(MheTransaction $mheTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MheTransaction  $mheTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(MheTransaction $mheTransaction)
    {
        //
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
