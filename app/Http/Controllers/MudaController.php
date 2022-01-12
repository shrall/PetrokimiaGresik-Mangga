<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Muda;
use App\Models\MudaMember;
use App\Models\MudaReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $logo = 'mangga-muda-' . time() . '-' . $request['logo']->getClientOriginalName();
        $request->logo->move(public_path('uploads/mangga/logos'), $logo);

        $market_position = 'mangga-muda-' . time() . '-' . $request['market_position']->getClientOriginalName();
        $request->market_position->move(public_path('uploads/mangga/marketpositions'), $market_position);

        $organization_structure = 'mangga-muda-' . time() . '-' . $request['organization_structure']->getClientOriginalName();
        $request->organization_structure->move(public_path('uploads/mangga/organizationstructures'), $organization_structure);

        $finance_attachment = 'mangga-muda-' . time() . '-' . $request['finance_attachment']->getClientOriginalName();
        $request->finance_attachment->move(public_path('uploads/mangga/financeattachments'), $finance_attachment);

        $business = Business::create([
            'name' => $request->name,
            'logo' => $logo,
            "sector_id" => $request->sector,
            "subsector_id" => $request->subsector,
            "type" => $request->type,
            "asset_value" => $request->asset_value,
            "address" => $request->address,
            "province_id" => $request->province,
            "city_id" => $request->city,
            "district_id" => $request->district,
            "village_id" => $request->village,
            "postal_code" => $request->postal_code,
            "status" => 1,
            "user_id" => Auth::id()
        ]);
        $muda = Muda::create([
            "business_title" => $request->business_title,
            "leader_name" => $request->leader_name,
            "university" => $request->university,
            "faculty" => $request->faculty,
            "member_count" => $request->member_count,
            "prospect" => $request->prospect,
            "target" => $request->target,
            "needs" => $request->needs,
            "growth_plan" => $request->growth_plan,
            "utilization_plan" => $request->utilization_plan,
            "return_plan" => $request->return_plan,
            "description" => $request->description,
            "market_share" => $request->market_share,
            "market_position" => $market_position,
            "production_strategy" => $request->production_strategy,
            "organization_structure" => $organization_structure,
            "finance_attachment" => $finance_attachment,
            "target_plan" => $request->target_plan,
            "finance" => $request->finance,
            "business_id" => $business->id,
        ]);

        foreach ($request->member_name_ as $key => $value) {
            MudaMember::create([
                'name' => $value,
                "muda_id" => $muda->id,
            ]);
        }

        foreach ($request->inflow_sales as $key => $value) {
            MudaReport::create([
                'month' => $key + 1,
                'inflow_sales' => $request->inflow_sales[$key],
                'inflow_loan' => $request->inflow_loan[$key],
                'inflow_subtotal' => $request->inflow_subtotal[$key],
                'outflow_investment' => $request->outflow_investment[$key],
                'outflow_ingredient' => $request->outflow_ingredient[$key],
                'outflow_production' => $request->outflow_production[$key],
                'outflow_maintenance' => $request->outflow_maintenance[$key],
                'outflow_admin' => $request->outflow_admin[$key],
                'outflow_installments' => $request->outflow_installments[$key],
                'outflow_subtotal' => $request->outflow_subtotal[$key],
                'difference' => $request->difference[$key],
                'difference_start' => $request->difference_start[$key],
                'difference_end' => $request->difference_end[$key],
                "muda_id" => $muda->id,
            ]);
        }

        return redirect()->route('user.status_ajuan');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function edit(Muda $muda)
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