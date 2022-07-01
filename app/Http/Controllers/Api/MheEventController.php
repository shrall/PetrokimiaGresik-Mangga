<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\MheEvent;
use Illuminate\Http\Request;

class MheEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = MheEvent::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $events
        ];
        return SuccessResource::make($return);
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
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function show(MheEvent $mheEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MheEvent $mheEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MheEvent  $mheEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MheEvent $mheEvent)
    {
        //
    }
}
