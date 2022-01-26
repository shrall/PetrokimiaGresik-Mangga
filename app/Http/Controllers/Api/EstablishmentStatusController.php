<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\EstablishmentStatus;
use Illuminate\Http\Request;

class EstablishmentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ess = EstablishmentStatus::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $ess
        ];
        return SuccessResource::make($return);
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
     * @param  \App\Models\EstablishmentStatus  $establishmentStatus
     * @return \Illuminate\Http\Response
     */
    public function show(EstablishmentStatus $establishmentStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstablishmentStatus  $establishmentStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(EstablishmentStatus $establishmentStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstablishmentStatus  $establishmentStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstablishmentStatus $establishmentStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstablishmentStatus  $establishmentStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstablishmentStatus $establishmentStatus)
    {
        //
    }
}
