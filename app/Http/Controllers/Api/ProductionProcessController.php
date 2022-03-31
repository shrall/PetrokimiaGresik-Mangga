<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\ProductionProcess;
use Illuminate\Http\Request;

class ProductionProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = ProductionProcess::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $processes
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
     * @param  \App\Models\ProductionProcess  $productionProcess
     * @return \Illuminate\Http\Response
     */
    public function show(ProductionProcess $productionProcess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductionProcess  $productionProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductionProcess $productionProcess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductionProcess  $productionProcess
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductionProcess $productionProcess)
    {
        //
    }
}
