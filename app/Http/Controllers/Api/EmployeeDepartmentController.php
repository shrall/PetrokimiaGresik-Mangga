<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\EmployeeDepartment;
use Illuminate\Http\Request;

class EmployeeDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = EmployeeDepartment::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses',
            'api_results' => $departments
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
     * @param  \App\Models\EmployeeDepartment  $employeeDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeDepartment $employeeDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeDepartment  $employeeDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeDepartment $employeeDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeDepartment  $employeeDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeDepartment $employeeDepartment)
    {
        //
    }
}
