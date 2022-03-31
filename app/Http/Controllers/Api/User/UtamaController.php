<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\Business;
use App\Models\BusinessCommodity;
use App\Models\BusinessPlan;
use App\Models\BusinessProduct;
use App\Models\People;
use App\Models\Utama;
use App\Models\UtamaMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utama = Auth::user()->businesses->last()->utama;
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $utama
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
        $ktp = 'mangga-utama-' . time() . '-' . $request['ktp']->getClientOriginalName();
        $request->ktp->move(public_path('uploads/mangga/ktp'), $ktp);

        $kk = 'mangga-utama-' . time() . '-' . $request['kk']->getClientOriginalName();
        $request->kk->move(public_path('uploads/mangga/kk'), $kk);

        $ktp_selfie = 'mangga-utama-' . time() . '-' . $request['ktp_selfie']->getClientOriginalName();
        $request->ktp_selfie->move(public_path('uploads/mangga/ktpselfie'), $ktp_selfie);

        $kk_selfie = 'mangga-utama-' . time() . '-' . $request['kk_selfie']->getClientOriginalName();
        $request->kk_selfie->move(public_path('uploads/mangga/kkselfie'), $kk_selfie);

        if ($request->siup) {
            $siup = 'mangga-utama-' . time() . '-' . $request['siup']->getClientOriginalName();
            $request->siup->move(public_path('uploads/mangga/siup'), $siup);
        } else {
            $siup = null;
        }

        $skdu = 'mangga-utama-' . time() . '-' . $request['skdu']->getClientOriginalName();
        $request->skdu->move(public_path('uploads/mangga/skdu'), $skdu);

        $establishment_picture = 'mangga-utama-' . time() . '-' . $request['establishment_picture']->getClientOriginalName();
        $request->establishment_picture->move(public_path('uploads/mangga/establishment_picture'), $establishment_picture);

        $product_picture = 'mangga-utama-' . time() . '-' . $request['product_picture']->getClientOriginalName();
        $request->product_picture->move(public_path('uploads/mangga/product_picture'), $product_picture);

        if ($request->business_sketch) {
            $business_sketch = 'mangga-utama-' . time() . '-' . $request['business_sketch']->getClientOriginalName();
            $request->business_sketch->move(public_path('uploads/mangga/business_sketch'), $business_sketch);
        } else {
            $business_sketch = null;
        }

        if ($request->house_sketch) {
            $house_sketch = 'mangga-utama-' . time() . '-' . $request['house_sketch']->getClientOriginalName();
            $request->house_sketch->move(public_path('uploads/mangga/house_sketch'), $house_sketch);
        } else {
            $house_sketch = null;
        }

        if ($request->member_name) {
            foreach ($request->member_ktp as $key => $mktp) {
                $mktpf[$key] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp'][$key]->getClientOriginalName();
                $request->member_ktp[$key]->move(public_path('uploads/mangga/ktp'), $mktpf[$key]);
            }

            foreach ($request->member_ktp_selfie as $key => $mktps) {
                $mktpsf[$key] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp_selfie'][$key]->getClientOriginalName();
                $request->member_ktp_selfie[$key]->move(public_path('uploads/mangga/ktpselfie'), $mktpsf[$key]);
            }

            if ($request->member_certificate != null) {
                foreach ($request->member_certificate as $key => $mc) {
                    if ($request->member_certificate[strval($key)]) {
                        $mcf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_certificate'][strval($key)]->getClientOriginalName();
                        $request->member_certificate[strval($key)]->move(public_path('uploads/mangga/certificate'), $mcf[strval($key)]);
                    } else {
                        $mcf[strval($key)] = null;
                    }
                }
            } else {
                $mcf = array();
            }

            if ($request->member_certificate_selfie != null) {
                foreach ($request->member_certificate_selfie as $key => $mcs) {
                    if ($request->member_certificate_selfie[strval($key)]) {
                        $mcsf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_certificate_selfie'][strval($key)]->getClientOriginalName();
                        $request->member_certificate_selfie[strval($key)]->move(public_path('uploads/mangga/certificateselfie'), $mcsf[strval($key)]);
                    } else {
                        $mcsf[strval($key)] = null;
                    }
                }
            } else {
                $mcsf = null;
            }
        }
        $reg_number = $this->getRegistrationNumber($request->sector, $request->subsector);

        $business = Business::create([
            'name' => $request->name,
            'registration_number' => $reg_number,
            "sector_id" => $request->sector,
            "subsector_id" => $request->subsector,
            "type" => $request->type,
            'mangga_type' => 1,
            "asset_value" => $request->asset_value,
            "address" => $request->address,
            "province_id" => $request->province,
            "city_id" => $request->city,
            "district_id" => $request->district,
            "village_id" => $request->village,
            "postal_code" => $request->postal_code,
            "status" => 1,
            'business_status_id' => 1,
            "user_id" => Auth::id()
        ]);

        $utama = Utama::create([
            'user_name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'user_npwp' => Auth::user()->npwp,
            'user_spouse' => Auth::user()->spouse,
            'user_birth_date' => Auth::user()->birth_date,
            'user_birth_place' => Auth::user()->birth_place,
            'user_ktp_code' => Auth::user()->ktp_code,
            'user_kk_code' => Auth::user()->kk_code,
            'user_gender' => Auth::user()->gender,
            'user_profession' => Auth::user()->profession,
            'user_address' => Auth::user()->address,
            'user_rt' => Auth::user()->rt,
            'user_rw' => Auth::user()->rw,
            'user_village' => Auth::user()->village->name,
            'user_district' => Auth::user()->district->name,
            'user_city' => Auth::user()->city->name,
            'user_province' => Auth::user()->province->name,
            'user_postal_code' => Auth::user()->postal_code,
            'user_email' => Auth::user()->email,
            'user_phone' => Auth::user()->handphone,
            'user_bank_branch' => Auth::user()->bank_branch,
            'user_bank_number' => Auth::user()->bank_number,
            'request_amount' => $request->request_amount,
            'collateral' => $request->collateral,
            'distribution_type_id' => $request->distribution_type,
            'best_product' => $request->best_product,
            'business_form_id' => $request->business_form,
            'member_count' => $request->member_count,
            'business_value' => $request->business_value,
            'asset_value' => $request->asset_value,
            'hr_value' => $request->hr_value,
            'turnover_value' => $request->turnover_value,
            'mail_address' => $request->mail_address,
            'telephone' => $request->telephone,
            'handphone' => $request->handphone,
            "unit_amount" => $request->unit_amount,
            'land' => $request->land,
            'building' => $request->building,
            'treasury' => $request->treasury,
            'credit' => $request->credit,
            'production_tools' => $request->production_tools,
            'savings' => $request->savings,
            'supply' => $request->supply,
            'vehicle' => $request->vehicle,
            "export_to" => $request->export_to,
            "product_distributor" => $request->product_distributor,
            "marketing_id" => $request->marketing,
            'email' => $request->email,
            'ktp' => $ktp,
            'ktp_selfie' => $ktp_selfie,
            'kk' => $kk,
            'kk_selfie' => $kk_selfie,
            'siup' => $siup,
            'skdu' => $skdu,
            "sales_value" => $request->sales_value,
            "total_cost" => $request->total_cost,
            "business_problem" => $request->business_problem,
            "establishment_picture" => $establishment_picture,
            "product_picture" => $product_picture,
            "business_sketch" => $business_sketch,
            "house_sketch" => $house_sketch,
            'siup_code' => $request->siup_code,
            'siup_date' => $request->siup_date,
            'establishment_status_id' => $request->establishment_status,
            'companion_name' => $request->companion_name,
            'companion_wedding_code' => $request->companion_wedding_code,
            'companion_wedding_name' => $request->companion_wedding_name,
            'companion_ktp_code' => $request->companion_ktp_code,
            'companion_telephone' => $request->companion_telephone,
            'companion_handphone' => $request->companion_handphone,
            'companion_email' => $request->companion_email,
            'companion_address' => $request->companion_address,
            'companion_province' => $request->companion_province,
            'companion_city' => $request->companion_city,
            'companion_district' => $request->companion_district,
            'companion_village' => $request->companion_village,
            'business_id' => $business->id
        ]);
        if ($request->member_name) {
            foreach ($request->member_name as $key => $value) {
                if (in_array(strval($key), $mcf)) {
                    $umember = UtamaMember::create([
                        'name' => $request->member_name[$key],
                        'ktp_code' => $request->member_ktp_code[$key],
                        'kk_code' => $request->member_kk_code[$key],
                        'phone' => $request->member_phone[$key],
                        'address' => $request->member_address[$key],
                        'kk_code' => $request->member_kk_code[$key],
                        'address' => $request->member_address[$key],
                        'income' => $request->member_income[$key],
                        'cost' => $request->member_cost[$key],
                        'profit' => $request->member_profit[$key],
                        'land' => $request->member_land[$key],
                        'building' => $request->member_building[$key],
                        'production_tools' => $request->member_production_tools[$key],
                        'supply' => $request->member_supply[$key],
                        'loan_amount' => $request->member_loan_amount[$key],
                        'cow_count' => $request->member_cow_count[$key] ?? null,
                        'cow_price' => $request->member_cow_price[$key] ?? null,
                        'human_resource' => $request->member_human_resource[$key] ?? null,
                        'medicine' => $request->member_medicine[$key] ?? null,
                        'concentrate' => $request->member_concentrate[$key] ?? null,
                        'hmt' => $request->member_hmt[$key] ?? null,
                        'cultivation' => $request->member_cultivation[$key] ?? null,
                        'transportation' => $request->member_transportation[$key] ?? null,
                        'land_ownership' => $request->member_land_ownership[$key] ?? null,
                        'land_area' => $request->member_land_area[$key] ?? null,
                        'seed' => $request->member_seed[$key] ?? null,
                        'feed' => $request->member_feed[$key] ?? null,
                        'others' => $request->member_others[$key] ?? null,
                        'period_month' => $request->member_period_month[$key] ?? null,
                        'fertilizer' => $request->member_fertilizer[$key] ?? null,
                        'certificate_name' => $request->member_certificate_name[$key],
                        'certificate_address' => $request->member_certificate_address[$key],
                        'ktp' => $mktpf[$key],
                        'ktp_selfie' => $mktpsf[$key],
                        'certificate' => $mcf[strval($key)],
                        "utama_id" => $utama->id,
                    ]);
                    $umember->update([
                        'certificate_selfie' => $mcsf[strval($key)],
                    ]);
                } else {
                    $umember = UtamaMember::create([
                        'name' => $request->member_name[$key],
                        'ktp_code' => $request->member_ktp_code[$key],
                        'kk_code' => $request->member_kk_code[$key],
                        'phone' => $request->member_phone[$key],
                        'address' => $request->member_address[$key],
                        'kk_code' => $request->member_kk_code[$key],
                        'address' => $request->member_address[$key],
                        'income' => $request->member_income[$key],
                        'cost' => $request->member_cost[$key],
                        'profit' => $request->member_profit[$key],
                        'land' => $request->member_land[$key],
                        'building' => $request->member_building[$key],
                        'production_tools' => $request->member_production_tools[$key],
                        'supply' => $request->member_supply[$key],
                        'loan_amount' => $request->member_loan_amount[$key],
                        'cow_count' => $request->member_cow_count[$key] ?? null,
                        'cow_price' => $request->member_cow_price[$key] ?? null,
                        'human_resource' => $request->member_human_resource[$key] ?? null,
                        'medicine' => $request->member_medicine[$key] ?? null,
                        'concentrate' => $request->member_concentrate[$key] ?? null,
                        'hmt' => $request->member_hmt[$key] ?? null,
                        'cultivation' => $request->member_cultivation[$key] ?? null,
                        'transportation' => $request->member_transportation[$key] ?? null,
                        'land_ownership' => $request->member_land_ownership[$key] ?? null,
                        'land_area' => $request->member_land_area[$key] ?? null,
                        'seed' => $request->member_seed[$key] ?? null,
                        'feed' => $request->member_feed[$key] ?? null,
                        'others' => $request->member_others[$key] ?? null,
                        'period_month' => $request->member_period_month[$key] ?? null,
                        'fertilizer' => $request->member_fertilizer[$key] ?? null,
                        'certificate_name' => $request->member_certificate_name[$key],
                        'certificate_address' => $request->member_certificate_address[$key],
                        'ktp' => $mktpf[$key],
                        'ktp_selfie' => $mktpsf[$key],
                        "utama_id" => $utama->id,
                    ]);
                }
            }
        }

        foreach ($request->business_plan_name as $key => $value) {
            if ($value && $request->business_plan_value[$key]) {
                BusinessPlan::create([
                    'name' => $request->business_plan_name[$key],
                    'value' => $request->business_plan_value[$key],
                    "business_id" => $business->id,
                ]);
            }
        }

        if ($request->business_commodity_name != null) {
            foreach ($request->business_commodity_name as $key => $value) {
                if ($value && $request->business_commodity_value[$key]) {
                    BusinessCommodity::create([
                        'name' => $request->business_commodity_name[$key],
                        'value' => $request->business_commodity_value[$key],
                        "business_id" => $business->id,
                    ]);
                }
            }
        }

        foreach ($request->business_product_name as $key => $value) {
            if ($value) {
                BusinessProduct::create([
                    'name' => $request->business_product_name[$key],
                    'qty' => $request->business_product_qty[$key],
                    'price' => $request->business_product_price[$key],
                    "business_id" => $business->id,
                ]);
            }
        }

        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $utama
        ];
        return SuccessResource::make($return);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function show(Utama $utama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utama $utama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utama $utama)
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
    public function download(Utama $utama)
    {
        $people = People::first();
        $pdf = PDF::loadview('user.proposal.utama', compact('utama', 'people'))->setOption('margin-bottom', '0mm')
            ->setOption('margin-top', '0mm')
            ->setOption('margin-right', '0mm')
            ->setOption('margin-left', '0mm')
            ->setOption('page-size', 'A4');
        return $pdf->stream('proposal.pdf');
    }
    public function ttd(Request $request, Utama $utama)
    {
        $complete_form = 'mangga-utama-' . time() . '-' . $request['complete_form']->getClientOriginalName();
        $request->complete_form->move(public_path('uploads/mangga/complete_form'), $complete_form);

        $utama->update([
            'complete_form' => $complete_form
        ]);

        $utama->business->update([
            'status' => 2,
            'business_status_id' => 2
        ]);

        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Lorem ipsum',
            'api_results' => $utama
        ];
        return SuccessResource::make($return);
    }
}
