<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\BusinessStatus;
use Illuminate\Http\Request;

class BusinessStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = BusinessStatus::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $statuses
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
     * @param  \App\Models\BusinessStatus  $businessStatus
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessStatus $businessStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusinessStatus  $businessStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessStatus $businessStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessStatus  $businessStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessStatus $businessStatus)
    {
        //
    }
}
