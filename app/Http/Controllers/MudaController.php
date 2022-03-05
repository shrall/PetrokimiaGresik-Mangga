<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\District;
use App\Models\Muda;
use App\Models\MudaCategory;
use App\Models\MudaMember;
use App\Models\MudaReport;
use App\Models\MudaType;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
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
        $messages = [
            'name.required' => 'Nama Bisnis',
            'logo.required' => 'Logo Bisnis',
            "muda_type.required" => 'Jenis Mangga Muda',
            "category.required" => 'Kategori',
            "subcategory.required" => 'Subkategori',
            "type.required" => 'Jenis Usaha',
            "asset_value.required" => 'Nilai Asset Usaha',
            "address.required" => 'Alamat Usaha',
            "province.required" => 'Provinsi Usaha',
            "city.required" => 'Kota Usaha',
            "district.required" => 'Kecamatan Usaha',
            "village.required" => 'Desa Usaha',
            "postal_code.required" => 'Kode Pos Usaha',
            "business_title.required" => 'Judul Usaha',
            "leader_name.required" => 'Nama Ketua',
            "leader_email.required" => 'E-Mail Ketua',
            "leader_phone.required" => 'No. HP Ketua',
            "university.required" => 'Asal Universitas',
            "faculty.required" => 'Fakultas',
            "recommender.required" => 'Perekomendasi',
            "recommender_position.required" => 'Jabatan Perekomendasi',
            "member_count.required" => 'Jumlah Anggota',
            "prospect.required" => 'Prospek Pengembangan Usaha',
            "target.required" => 'Nilai Target Penjualan',
            "needs.required" => 'Kebutuhan dan Sumber Daya',
            "growth_plan.required" => 'Rencana Pengembangan Usaha',
            "utilization_plan.required" => 'Rencana Penggunaan Dana',
            "return_plan.required" => 'Rencana Pengembalian Dana',
            "description.required" => 'Deskripsi Usaha',
            "market_share.required" => 'Pangsa Pasar Produk',
            "market_position.required" => 'Peta Positioning',
            "production_strategy.required" => 'Strategi Produksi',
            "organization_structure.required" => 'Struktur Organisasi',
            "finance_attachment.required" => 'Struktur Pendanaan',
            "target_plan.required" => 'Rencana Untuk Mencapai Target',
            "finance.required" => 'Analisis Investasi dan Rencana Cashflow',
        ];

        foreach ($request->member_name as $key => $value) {
            $messages["member_name.$key.required"] = "Nama Anggota {$key}";
        }
        foreach ($request->inflow_sales as $key => $value) {
            $messages["inflow_sales.$key.required"] = "Penerimaan Penjualan {$key}";
            $messages["inflow_loan.$key.required"] = "Penerimaan Pinjaman {$key}";
            $messages["inflow_subtotal.$key.required"] = "Subtotal Penerimaan {$key}";
            $messages["outflow_investment.$key.required"] = "Pembelian Aset (Investasi) {$key}";
            $messages["outflow_ingredient.$key.required"] = "Pembelian Bahan Baku {$key}";
            $messages["outflow_production.$key.required"] = "Biaya Produksi {$key}";
            $messages["outflow_maintenance.$key.required"] = "Biaya Pemeliharaan {$key}";
            $messages["outflow_admin.$key.required"] = "Biaya Administrasi {$key}";
            $messages["outflow_installments.$key.required"] = "Angsuran Pokok {$key}";
            $messages["outflow_subtotal.$key.required"] = "Subtotal Pengeluaran {$key}";
            $messages["difference.$key.required"] = "Selisih Kas {$key}";
            $messages["difference_start.$key.required"] = "Selisih Kas Awal {$key}";
            $messages["difference_end.$key.required"] = "Selisih Kas Akhir {$key}";
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'logo' => 'required',
            "muda_type" => 'required',
            "category" => 'required',
            "subcategory" => 'required',
            "type" => 'required',
            "asset_value" => 'required',
            "address" => 'required',
            "province" => 'required',
            "city" => 'required',
            "district" => 'required',
            "village" => 'required',
            "postal_code" => 'required',
            "business_title" => 'required',
            "leader_name" => 'required',
            "leader_email" => 'required',
            "leader_phone" => 'required',
            "university" => 'required',
            "faculty" => 'required',
            "recommender" => 'required',
            "recommender_position" => 'required',
            "member_count" => 'required',
            "prospect" => 'required',
            "target" => 'required',
            "needs" => 'required',
            "growth_plan" => 'required',
            "utilization_plan" => 'required',
            "return_plan" => 'required',
            "description" => 'required',
            "market_share" => 'required',
            "market_position" => 'required',
            "production_strategy" => 'required',
            "organization_structure" => 'required',
            "finance_attachment" => 'required',
            "target_plan" => 'required',
            "finance" => 'required',
            "member_name" => 'required|array|min:' . $request->member_count,
            "inflow_sales" => 'required|array|min:6',
            'inflow_loan' => 'required|array|min:6',
            'inflow_subtotal' => 'required|array|min:6',
            'outflow_investment' => 'required|array|min:6',
            'outflow_ingredient' => 'required|array|min:6',
            'outflow_production' => 'required|array|min:6',
            'outflow_maintenance' => 'required|array|min:6',
            'outflow_admin' => 'required|array|min:6',
            'outflow_installments' => 'required|array|min:6',
            'outflow_subtotal' => 'required|array|min:6',
            'difference' => 'required|array|min:6',
            'difference_start' => 'required|array|min:6',
            'difference_end' => 'required|array|min:6',
            "member_name.*" => 'required',
            "inflow_sales.*" => 'required',
            'inflow_loan.*' => 'required',
            'inflow_subtotal.*' => 'required',
            'outflow_investment.*' => 'required',
            'outflow_ingredient.*' => 'required',
            'outflow_production.*' => 'required',
            'outflow_maintenance.*' => 'required',
            'outflow_admin.*' => 'required',
            'outflow_installments.*' => 'required',
            'outflow_subtotal.*' => 'required',
            'difference.*' => 'required',
            'difference_start.*' => 'required',
            'difference_end.*' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $logo = 'mangga-muda-' . time() . '-' . $request['logo']->getClientOriginalName();
        $request->logo->move(public_path('uploads/mangga/logos'), $logo);

        $market_position = 'mangga-muda-' . time() . '-' . $request['market_position']->getClientOriginalName();
        $request->market_position->move(public_path('uploads/mangga/marketpositions'), $market_position);

        $organization_structure = 'mangga-muda-' . time() . '-' . $request['organization_structure']->getClientOriginalName();
        $request->organization_structure->move(public_path('uploads/mangga/organizationstructures'), $organization_structure);

        $finance_attachment = 'mangga-muda-' . time() . '-' . $request['finance_attachment']->getClientOriginalName();
        $request->finance_attachment->move(public_path('uploads/mangga/financeattachments'), $finance_attachment);

        $ktp = 'mangga-muda-' . time() . '-' . $request['leader_ktp']->getClientOriginalName();
        $request->leader_ktp->move(public_path('uploads/mangga/ktp'), $ktp);
        $ktm = 'mangga-muda-' . time() . '-' . $request['leader_ktm']->getClientOriginalName();
        $request->leader_ktm->move(public_path('uploads/mangga/ktm'), $ktm);

        foreach ($request->member_ktp as $key => $mktp) {
            $mktpf[$key] = 'mangga-muda-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp'][$key]->getClientOriginalName();
            $request->member_ktp[$key]->move(public_path('uploads/mangga/ktp'), $mktpf[$key]);
        }
        foreach ($request->member_ktm as $key => $mktm) {
            $mktmf[$key] = 'mangga-muda-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktm'][$key]->getClientOriginalName();
            $request->member_ktm[$key]->move(public_path('uploads/mangga/ktm'), $mktpf[$key]);
        }

        $reg_number = $this->getRegistrationNumber($request->muda_type, $request->category);

        $business = Business::create([
            'name' => $request->name,
            'registration_number' => $reg_number,
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
            "status" => 1,
            'business_status_id' => 1,
            "user_id" => Auth::id()
        ]);
        $muda = Muda::create([
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
            "business_id" => $business->id,
        ]);

        if ($request->member_count > 0) {
            foreach ($request->member_name as $key => $value) {
                MudaMember::create([
                    'name' => $value,
                    'ktp' => $mktpf[$key],
                    'ktm' => $mktmf[$key],
                    "muda_id" => $muda->id,
                ]);
            }
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
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $types = MudaType::all();
        $categories = MudaCategory::all();
        return view('user.form.muda_edit', compact('muda', 'provinces', 'cities', 'districts', 'villages', 'types', 'categories'));
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

        return redirect()->route('user.status_ajuan');
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

    public function getRegistrationNumber(int $sector, int $subsector)
    {
        $temp = 'GG-' . str_pad(rand(0, pow(10, 8) - 1), 8, '0', STR_PAD_LEFT) . '-' . $sector . '-' . $subsector;
        if (Business::where('registration_number', $temp)->exists()) {
            return $this->getRegistrationNumber($sector, $subsector);
        } else {
            return $temp;
        }
    }

    public function preview(Muda $muda)
    {
        if ($muda->business->status == 3) {
            $muda->business->update([
                'status' => 4,
                'business_status_id' => 4
            ]);
        }
        return view('user.proposal.muda', compact('muda'));
    }
    public function download(Muda $muda)
    {
        if ($muda->business->status == 3) {
            $muda->business->update([
                'status' => 4,
                'business_status_id' => 4
            ]);
        }
        $pdf = PDF::loadview('user.proposal.muda', compact('muda'))->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
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

        return redirect()->route('user.status_ajuan');
    }
}
