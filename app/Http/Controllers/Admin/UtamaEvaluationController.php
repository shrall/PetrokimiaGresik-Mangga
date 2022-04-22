<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessLog;
use App\Models\People;
use App\Models\UtamaEvaluation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;

class UtamaEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.evaluation.index');
    }
    public function check(Request $request)
    {
        $number = $request->one . '-' . $request->two . '-' . $request->three . '-' . $request->four;
        $business = Business::where('registration_number', $number)->first();
        if ($business) {
            return redirect()->route('admin.business.show', $business->id);
        } else {
            return redirect()->route('admin.evaluation.index')->with('Message', 'Ajuan Tidak Ditemukan!');
        }
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
        $business = Business::where('id', $request->business_id)->first();
        $evaluation = UtamaEvaluation::create([
            'utama_id' => $business->utama->id,
            'installment_type' => $request->installment_type,
            'business_form' => $business->utama->business_form_id,
            'business_ownership' => $business->utama->establishment_status_id,
            'capital_source' => $request->capital_source,
            'finance_record' => $request->finance_record,
            'production_process' => $request->production_process,
            'land_ownership' => $request->land_ownership,
            'sector_id' => $business->sector_id,
            'commodity' => $request->commodity,
            'loan_step' => $request->loan_step,
            'installment_amount' => $request->installment_amount,
            'loan_period' => $request->loan_period,
            'grace_period' => $request->grace_period,
            'number_served' => $request->number_served,
            'land_area' => $request->land_area,
            'animal_count' => $request->animal_count,
            'shed_count' => $request->shed_count,
            'asset_total' => $request->asset_total,
            'profit_per_harvest' => $request->profit_per_harvest,
            'land_area_surveyor' => $request->land_area_surveyor,
            'animal_count_surveyor' => $request->animal_count_surveyor,
            'term_group' => $request->term_group,
            'collateral_area' => $request->collateral_area,
            'collateral_owner' => $request->collateral_owner,
            'collateral_date' => $request->collateral_date,
            'collateral_price' => $request->collateral_price,
            'training' => $request->training,
            'training_type' => $request->training_type,
            'training_instance' => $request->training_instance,
            'record_production' => $request->record_production,
            'record_stock' => $request->record_stock,
            'organization_structure' => $request->organization_structure,
            'labor_force' => $request->labor_force,
            'patent' => $request->patent,
            'market_local' => $request->market_local ? 1 : 0,
            'market_province' => $request->market_province ? 1 : 0,
            'market_export' => $request->market_export ? 1 : 0,
            'export_to' => $request->export_to,
            'payment_cash' => $request->payment_cash ? 1 : 0,
            'payment_check' => $request->payment_check ? 1 : 0,
            'market_order' => $request->market_order ? 1 : 0,
            'market_routine' => $request->market_routine ? 1 : 0,
            'market_consignment' => $request->market_consignment ? 1 : 0,
            'bike' => $request->bike ? 1 : 0,
            'car' => $request->car ? 1 : 0,
            'bike_value' => $request->bike_value,
            'car_value' => $request->car_value,
            'other_assets' => $request->other_assets,
            'utility_cost' => $request->utility_cost,
            'daily_cost' => $request->daily_cost,
            'other_cost' => $request->other_cost,
            'year' => $request->year,
            'sales' => $request->sales,
            'goods_cost' => $request->goods_cost,
            'supply_start' => $request->supply_start,
            'purchase' => $request->purchase,
            'supply_end' => $request->supply_end,
            'gross' => $request->gross,
            'expense_salary' => $request->expense_salary,
            'expense_fertilizer' => $request->expense_fertilizer,
            'expense_transport' => $request->expense_transport,
            'expense_utility' => $request->expense_utility,
            'expense_rent' => $request->expense_rent,
            'expense_others' => $request->expense_others,
            'other_income_1' => $request->other_income_1,
            'other_income_2' => $request->other_income_2,
            'other_income_value_1' => $request->other_income_value_1,
            'other_income_value_2' => $request->other_income_value_2,
            'profit_loss' => $request->profit_loss,
            'survey_date' => $request->survey_date,
            'loan_suggestion' => $request->loan_suggestion,
            'surveyor_note' => $request->surveyor_note,
            'surveyor_name' => $request->surveyor_name,
            'surveyor_city' => $request->surveyor_city,
        ]);
        if ($request->status == 1) {
            $business->update([
                'status' => 3,
                'business_status_id' => 3,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,

            ]);
            BusinessLog::create([
                'description' => 'Disetujui (Surveyor) oleh ' . $request->surveyor_name,
                'business_id' => $business->id,
                'admin_id' => Auth::user()->id
            ]);
        } else {
            $business->update([
                'status' => 5,
                'business_status_id' => 5,
                'rejected_at' => Carbon::now(),
            ]);
            BusinessLog::create([
                'description' => 'Ditolak oleh ' . $request->surveyor_name,
                'business_id' => $business->id,
                'admin_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('admin.program.utama', $business->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UtamaEvaluation  $utamaEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(UtamaEvaluation $evaluation)
    {
        $people = People::first();
        $pdf = PDF::loadview('admin.evaluation.form', compact('evaluation', 'people'))->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UtamaEvaluation  $utamaEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(UtamaEvaluation $utamaEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UtamaEvaluation  $utamaEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UtamaEvaluation $utamaEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UtamaEvaluation  $utamaEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UtamaEvaluation $utamaEvaluation)
    {
        //
    }
}
