<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MudaResource;
use App\Http\Resources\SuccessResource;
use App\Models\Muda;
use Illuminate\Http\Request;

class MudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mudas = Muda::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => MudaResource::collection($mudas)
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
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function show(Muda $muda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muda $muda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muda $muda)
    {
        //
    }
}
