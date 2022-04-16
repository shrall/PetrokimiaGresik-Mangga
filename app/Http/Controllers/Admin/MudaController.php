<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessLog;
use App\Models\District;
use App\Models\Muda;
use App\Models\MudaCategory;
use App\Models\MudaMember;
use App\Models\MudaType;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muda  $muda
     * @return \Illuminate\Http\Response
     */
    public function edit(Muda $muda)
    {
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $types = MudaType::all();
        $categories = MudaCategory::all();
        return view('admin.mangga.edit.muda', compact('provinces', 'cities', 'districts', 'villages', 'types', 'categories', 'muda'));
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
        if ($request->logo) {
            $logo = 'mangga-muda-' . time() . '-' . $request['logo']->getClientOriginalName();
            $request->logo->move(public_path('uploads/mangga/logos'), $logo);
        } else {
            $logo = $muda->business->logo;
        }

        if ($request->market_position) {
            $market_position = 'mangga-muda-' . time() . '-' . $request['market_position']->getClientOriginalName();
            $request->market_position->move(public_path('uploads/mangga/marketpositions'), $market_position);
        } else {
            $market_position = $muda->market_position;
        }

        if ($request->organization_structure) {
            $organization_structure = 'mangga-muda-' . time() . '-' . $request['organization_structure']->getClientOriginalName();
            $request->organization_structure->move(public_path('uploads/mangga/organizationstructures'), $organization_structure);
        } else {
            $organization_structure = $muda->organization_structure;
        }

        if ($request->finance_attachment) {
            $finance_attachment = 'mangga-muda-' . time() . '-' . $request['finance_attachment']->getClientOriginalName();
            $request->finance_attachment->move(public_path('uploads/mangga/financeattachments'), $finance_attachment);
        } else {
            $finance_attachment = $muda->finance_attachment;
        }

        if ($request->leader_ktp) {
            $ktp = 'mangga-muda-' . time() . '-' . $request['leader_ktp']->getClientOriginalName();
            $request->leader_ktp->move(public_path('uploads/mangga/ktp'), $ktp);
        } else {
            $ktp = $muda->leader_ktp;
        }

        if ($request->leader_ktm) {
            $ktm = 'mangga-muda-' . time() . '-' . $request['leader_ktm']->getClientOriginalName();
            $request->leader_ktm->move(public_path('uploads/mangga/ktm'), $ktm);
        } else {
            $ktm = $muda->leader_ktm;
        }

        if ($request->member_ktp != null) {
            foreach ($request->member_ktp as $key => $mc) {
                if ($request->member_ktp[strval($key)]) {
                    $mktpf[strval($key)] = 'mangga-muda-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp'][strval($key)]->getClientOriginalName();
                    $request->member_ktp[strval($key)]->move(public_path('uploads/mangga/ktp'), $mktpf[strval($key)]);
                } else {
                    $mktpf[strval($key)] = null;
                }
            }
        } else {
            foreach ($muda->members as $key => $member) {
                $mktpf[strval($key)] = $member->ktp;
            }
        }
        if ($request->member_ktm != null) {
            foreach ($request->member_ktm as $key => $mc) {
                if ($request->member_ktm[strval($key)]) {
                    $mktmf[strval($key)] = 'mangga-muda-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktm'][strval($key)]->getClientOriginalName();
                    $request->member_ktm[strval($key)]->move(public_path('uploads/mangga/ktm'), $mktmf[strval($key)]);
                } else {
                    $mktmf[strval($key)] = null;
                }
            }
        } else {
            foreach ($muda->members as $key => $member) {
                $mktmf[strval($key)] = $member->ktm;
            }
        }

        if ($request->member_count > 0) {
            if ($request->member_count == count($muda->members)) {
                if ($request->member_ktp != null) {
                    foreach ($mktpf as $key => $member) {
                        $muda->members[$key - 1]->update([
                            'ktp' => $mktpf[$key] ?? $muda->members[$key - 1]->ktp,
                        ]);
                    }
                }
                if ($request->member_ktm != null) {
                    foreach ($mktmf as $key => $member) {
                        $muda->members[$key - 1]->update([
                            'ktm' => $mktmf[$key] ?? $muda->members[$key - 1]->ktm,
                        ]);
                    }
                }
                foreach ($request->member_name as $key => $member) {
                    $muda->members[$key - 1]->update([
                        'name' => $request->member_name[$key],
                    ]);
                }
            } else {
                foreach ($muda->members as $key => $value) {
                    $value->delete();
                }
                foreach ($request->member_name as $key => $value) {
                    MudaMember::create([
                        'name' => $value,
                        'ktp' => $mktpf[$key],
                        'ktm' => $mktmf[$key],
                        "muda_id" => $muda->id,
                    ]);
                }
            }
        }

        $muda->business->update([
            'name' => $request->name,
            'logo' => $logo,
            "sector_id" => $request->sector,
            "subsector_id" => $request->subsector,
            "type" => $request->type,
            "asset_value" => $request->asset_value,
            "address" => $request->address,
            'mangga_type' => 2,
            "province_id" => $request->province,
            "city_id" => $request->city,
            "district_id" => $request->district,
            "village_id" => $request->village,
            "postal_code" => $request->postal_code,
            "status" => $muda->business->status,
        ]);
        $muda->update([
            "business_title" => $request->business_title,
            "leader_name" => $request->leader_name,
            "leader_phone" => $request->leader_phone,
            "leader_email" => $request->leader_email,
            "leader_ktp" => $ktp,
            "leader_ktm" => $ktm,
            "university" => $request->university,
            "type_id" => $request->muda_type,
            "category_id" => $request->category,
            "subcategory" => $request->subcategory,
            "faculty" => $request->faculty,
            "recommender" => $request->recommender,
            "recommender_position" => $request->recommender_position,
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
        ]);

        foreach ($request->inflow_sales as $key => $value) {
            $muda->reports[$key - 1]->update([
                'month' => $key,
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

        return redirect()->route('admin.program');
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
    public function preview(Muda $muda)
    {
        return view('user.proposal.muda', compact('muda'));
    }
    public function download(Muda $muda)
    {
        $pdf = PDF::loadview('user.proposal.muda', compact('muda'))->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }
    public function approve_surveyor(Muda $muda)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 3) {
            $muda->business->update([
                'status' => 3,
                'business_status_id' => 3,
                'approved_by_surveyor_at' => Carbon::now(),
                'rejected_at' => null,

            ]);
            BusinessLog::create([
                'description' => 'Disetujui oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
                'business_id' => $muda->business->id,
                'admin_id' => Auth::user()->id
            ]);
        }
        return redirect()->route('admin.program.muda', $muda->business->id);
    }

    public function reject(Muda $muda)
    {
        $muda->business->update([
            'status' => 5,
            'business_status_id' => 5,
            'rejected_at' => Carbon::now(),
        ]);
        BusinessLog::create([
            'description' => 'Ditolak oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'business_id' => $muda->business->id,
            'admin_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.program.muda', $muda->business->id);
    }
    public function ttd(Request $request, Muda $muda)
    {
        $complete_form = 'mangga-muda-' . time() . '-' . $request['complete_form']->getClientOriginalName();
        $request->complete_form->move(public_path('uploads/mangga/complete_form'), $complete_form);

        $muda->update([
            'complete_form' => $complete_form
        ]);

        $muda->business->update([
            'status' => 2,
            'business_status_id' => 2
        ]);

        return redirect()->route('admin.program.muda', $muda->business->id);
    }
}
