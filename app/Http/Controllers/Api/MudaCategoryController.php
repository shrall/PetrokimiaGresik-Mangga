<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\MudaCategory;
use Illuminate\Http\Request;

class MudaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MudaCategory::all();
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $categories
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
     * @param  \App\Models\MudaCategory  $mudaCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MudaCategory $mudaCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MudaCategory  $mudaCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MudaCategory $mudaCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MudaCategory  $mudaCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MudaCategory $mudaCategory)
    {
        //
    }
}
