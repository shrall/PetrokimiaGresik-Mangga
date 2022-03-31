<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\FinanceRecord;
use Illuminate\Http\Request;

class FinanceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = FinanceRecord::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $records
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
     * @param  \App\Models\FinanceRecord  $financeRecord
     * @return \Illuminate\Http\Response
     */
    public function show(FinanceRecord $financeRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinanceRecord  $financeRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinanceRecord $financeRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinanceRecord  $financeRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinanceRecord $financeRecord)
    {
        //
    }
}
