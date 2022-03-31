<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\CapitalSource;
use Illuminate\Http\Request;

class CapitalSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = CapitalSource::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $sources
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
     * @param  \App\Models\CapitalSource  $capitalSource
     * @return \Illuminate\Http\Response
     */
    public function show(CapitalSource $capitalSource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CapitalSource  $capitalSource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CapitalSource $capitalSource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CapitalSource  $capitalSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(CapitalSource $capitalSource)
    {
        //
    }
}
