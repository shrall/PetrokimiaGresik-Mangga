<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\SubSector;
use Illuminate\Http\Request;

class SubSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ss = SubSector::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $ss
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
     * @param  \App\Models\SubSector  $subSector
     * @return \Illuminate\Http\Response
     */
    public function show(SubSector $subSector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSector  $subSector
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSector $subSector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSector  $subSector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSector $subSector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSector  $subSector
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSector $subSector)
    {
        //
    }
}
