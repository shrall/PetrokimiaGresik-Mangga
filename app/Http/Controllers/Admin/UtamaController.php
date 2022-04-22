<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessCommodity;
use App\Models\BusinessForm;
use App\Models\BusinessLog;
use App\Models\BusinessPlan;
use App\Models\BusinessProduct;
use App\Models\DistributionType;
use App\Models\District;
use App\Models\Education;
use App\Models\EstablishmentStatus;
use App\Models\Marketing;
use App\Models\People;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Religion;
use App\Models\Sector;
use App\Models\Subsector;
use App\Models\User;
use App\Models\Utama;
use App\Models\UtamaMember;
use App\Models\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selected_sector = request('sector');
        $sectors = Sector::all();
        $subsectors = Subsector::all();
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $business_forms = BusinessForm::all();
        $establishment_statuses = EstablishmentStatus::all();
        $distribution_types = DistributionType::all();
        $marketings = Marketing::all();
        $religions = Religion::all();
        $educations = Education::all();
        return view('admin.mangga.create.utama', compact('educations', 'religions', 'provinces', 'cities', 'districts', 'villages', 'selected_sector', 'sectors', 'subsectors', 'business_forms', 'establishment_statuses', 'distribution_types', 'marketings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'province_id' => $request->province,
            'city_id' => $request->city,
            'district_id' => $request->district,
            'village_id' => $request->village,
            'password' => Hash::make($request->password),
            'user_role' => 1,
            'registration_ip' => request()->ip(),
            'referral_code' => '',
            'email_verified_at' => Carbon::now()
        ]);
        if ($request->image) {
            $image = 'user-' . time() . '-' . $request['image']->getClientOriginalName();
            $request->image->move(public_path('uploads/user'), $image);
        } else {
            $image = $user->picture;
        }
        $user->update([
            'picture' => $image,
            'ktp_code' => $request->ktp_code,
            'kk_code' => $request->kk_code,
            'profession' => $request->profession,
            'retired' => $request->retired,
            'education' => $request->education,
            'heir' => $request->heir,
            'house_ownership' => $request->house_ownership,
            'npwp' => $request->npwp,
            'bank_number' => $request->bank_number,
            'bank_owner' => $request->bank_owner,
            'bank_name' => $request->bank_name,
            'bank_branch' => $request->bank_branch,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'gender' => $request->gender,
            'married' => $request->married,
            'spouse' => $request->spouse,
            'religion_id' => $request->religion,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'postal_code' => $request->postal_code,
            'google_maps' => $request->google_maps
        ]);
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
        // dd($mcf);
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
            "user_id" => $user->id
        ]);

        $utama = Utama::create([
            'user_name' => $user->first_name . ' ' . $user->last_name,
            'user_npwp' => $user->npwp,
            'user_spouse' => $user->spouse,
            'user_birth_date' => $user->birth_date,
            'user_birth_place' => $user->birth_place,
            'user_ktp_code' => $user->ktp_code,
            'user_kk_code' => $user->kk_code,
            'user_gender' => $user->gender,
            'user_profession' => $user->profession,
            'user_address' => $user->address,
            'user_rt' => $user->rt,
            'user_rw' => $user->rw,
            'user_village' => $user->village->name,
            'user_district' => $user->district->name,
            'user_city' => $user->city->name,
            'user_province' => $user->province->name,
            'user_postal_code' => $user->postal_code,
            'user_email' => $user->email,
            'user_phone' => $user->handphone,
            'user_bank_branch' => $user->bank_branch,
            'user_bank_number' => $user->bank_number,
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
        if ($request->member_count > 0) {
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

        return redirect()->route('admin.program');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function edit(Utama $utama)
    {
        $sectors = Sector::all();
        $subsectors = Subsector::all();
        $provinces = Province::all();
        $cities = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $business_forms = BusinessForm::all();
        $establishment_statuses = EstablishmentStatus::all();
        $distribution_types = DistributionType::all();
        $marketings = Marketing::all();
        return view('admin.mangga.edit.utama', compact('utama', 'provinces', 'cities', 'districts', 'villages', 'sectors', 'subsectors', 'business_forms', 'establishment_statuses', 'distribution_types', 'marketings'));
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
        $mcf = array();
        if ($request->ktp) {
            $ktp = 'mangga-utama-' . time() . '-' . $request['ktp']->getClientOriginalName();
            $request->ktp->move(public_path('uploads/mangga/ktp'), $ktp);
        } else {
            $ktp = $utama->ktp;
        }

        if ($request->kk) {
            $kk = 'mangga-utama-' . time() . '-' . $request['kk']->getClientOriginalName();
            $request->kk->move(public_path('uploads/mangga/kk'), $kk);
        } else {
            $kk = $utama->kk;
        }
        if ($request->ktp_selfie) {
            $ktp_selfie = 'mangga-utama-' . time() . '-' . $request['ktp_selfie']->getClientOriginalName();
            $request->ktp_selfie->move(public_path('uploads/mangga/ktpselfie'), $ktp_selfie);
        } else {
            $ktp_selfie = $utama->ktp_selfie;
        }
        if ($request->kk_selfie) {
            $kk_selfie = 'mangga-utama-' . time() . '-' . $request['kk_selfie']->getClientOriginalName();
            $request->kk_selfie->move(public_path('uploads/mangga/kkselfie'), $kk_selfie);
        } else {
            $kk_selfie = $utama->kk_selfie;
        }

        if ($request->siup) {
            $siup = 'mangga-utama-' . time() . '-' . $request['siup']->getClientOriginalName();
            $request->siup->move(public_path('uploads/mangga/siup'), $siup);
        } else {
            $siup = null;
        }
        if ($request->skdu) {
            $skdu = 'mangga-utama-' . time() . '-' . $request['skdu']->getClientOriginalName();
            $request->skdu->move(public_path('uploads/mangga/skdu'), $skdu);
        } else {
            $skdu = $utama->skdu;
        }
        if ($request->establishment_picture) {
            $establishment_picture = 'mangga-utama-' . time() . '-' . $request['establishment_picture']->getClientOriginalName();
            $request->establishment_picture->move(public_path('uploads/mangga/establishment_picture'), $establishment_picture);
        } else {
            $establishment_picture = $utama->establishment_picture;
        }
        if ($request->product_picture) {
            $product_picture = 'mangga-utama-' . time() . '-' . $request['product_picture']->getClientOriginalName();
            $request->product_picture->move(public_path('uploads/mangga/product_picture'), $product_picture);
        } else {
            $product_picture = $utama->product_picture;
        }

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

        if ($request->member_count > 0) {
            if ($request->member_ktp != null) {
                foreach ($request->member_ktp as $key => $mc) {
                    if ($request->member_ktp[strval($key)]) {
                        $mktpf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp'][strval($key)]->getClientOriginalName();
                        $request->member_ktp[strval($key)]->move(public_path('uploads/mangga/ktp'), $mktpf[strval($key)]);
                    } else {
                        $mktpf[strval($key)] = null;
                    }
                }
            } else {
                foreach ($utama->members as $key => $member) {
                    $mktpf[strval($key)] = $member->ktp;
                }
            }

            if ($request->member_ktp_selfie != null) {
                foreach ($request->member_ktp_selfie as $key => $mc) {
                    if ($request->member_ktp_selfie[strval($key)]) {
                        $mktpsf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_ktp_selfie'][strval($key)]->getClientOriginalName();
                        $request->member_ktp_selfie[strval($key)]->move(public_path('uploads/mangga/ktpselfie'), $mktpsf[strval($key)]);
                    } else {
                        $mktpsf[strval($key)] = null;
                    }
                }
            } else {
                foreach ($utama->members as $key => $member) {
                    $mktpsf[strval($key)] = $member->ktp;
                }
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
                foreach ($utama->members as $key => $member) {
                    if ($member->certificate != null) {
                        $mcf[strval($key)] = $member->certificate;
                    } else {
                        $mcf[strval($key)] = null;
                    }
                }
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
                foreach ($utama->members as $key => $member) {
                    if ($member->certificate_selfie != null) {
                        $mcsf[strval($key)] = $member->certificate_selfie;
                    } else {
                        $mcsf[strval($key)] = null;
                    }
                }
            }
        }

        $utama->business->update([
            'name' => $request->name,
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
        ]);

        $utama->update([
            'user_name' => $utama->user_name,
            'user_npwp' => $utama->user_npwp,
            'user_spouse' => $utama->user_spouse,
            'user_birth_date' => $utama->user_birth_date,
            'user_birth_place' => $utama->user_birth_place,
            'user_ktp_code' => $utama->user_ktp_code,
            'user_kk_code' => $utama->user_kk_code,
            'user_gender' => $utama->user_gender,
            'user_profession' => $utama->user_profession,
            'user_address' => $utama->user_address,
            'user_rt' => $utama->user_rt,
            'user_rw' => $utama->user_rw,
            'user_village' => $utama->user_village,
            'user_district' => $utama->user_district,
            'user_city' => $utama->user_city,
            'user_province' => $utama->user_province,
            'user_postal_code' => $utama->user_postal_code,
            'user_email' => $utama->user_email,
            'user_phone' => $utama->user_phone,
            'user_bank_branch' => $utama->user_bank_branch,
            'user_bank_number' => $utama->user_bank_number,
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
            'business_id' => $utama->business_id
        ]);
        if ($request->member_count > 0) {
            if ($request->member_count == count($utama->members)) {
                if ($request->member_ktp != null) {
                    foreach ($mktpf as $key => $member) {
                        $utama->members[$key - 1]->update([
                            'ktp' => $mktpf[$key] ?? $utama->members[$key - 1]->ktp,
                        ]);
                    }
                }
                if ($request->member_ktp_selfie != null) {
                    foreach ($mktpsf as $key => $member) {
                        $utama->members[$key - 1]->update([
                            'ktp_selfie' => $mktpsf[$key] ?? $utama->members[$key - 1]->ktp_selfie,
                        ]);
                    }
                }
                if ($request->member_certificate != null) {
                    foreach ($mcf as $key => $member) {
                        $utama->members[$key - 1]->update([
                            'certificate' => $mcf[$key] ?? $utama->members[$key - 1]->certificate,
                        ]);
                    }
                }
                if ($request->member_certificate_selfie != null) {
                    foreach ($mcsf as $key => $member) {
                        $utama->members[$key - 1]->update([
                            'certificate_selfie' => $mcsf[$key] ?? $utama->members[$key - 1]->certificate_selfie,
                        ]);
                    }
                }
            } else {
                foreach ($utama->members as $key => $value) {
                    $value->delete();
                }
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
        }

        foreach ($utama->business->plans as $key => $value) {
            $value->delete();
        }
        foreach ($request->business_plan_name as $key => $value) {
            if ($value && $request->business_plan_value[$key]) {
                BusinessPlan::create([
                    'name' => $request->business_plan_name[$key],
                    'value' => $request->business_plan_value[$key],
                    "business_id" => $utama->business_id,
                ]);
            }
        }

        if ($request->business_commodity_name != null) {
            foreach ($utama->business->commodities as $key => $value) {
                $value->delete();
            }
            foreach ($request->business_commodity_name as $key => $value) {
                if ($value && $request->business_commodity_value[$key]) {
                    BusinessCommodity::create([
                        'name' => $request->business_commodity_name[$key],
                        'value' => $request->business_commodity_value[$key],
                        "business_id" => $utama->business_id,
                    ]);
                }
            }
        }
        foreach ($request->business_product_name as $key => $value) {
            foreach ($utama->business->products as $key => $value) {
                $value->delete();
            }
            if ($value) {
                BusinessProduct::create([
                    'name' => $value,
                    'qty' => $request->business_product_qty[$key],
                    'price' => $request->business_product_price[$key],
                    "business_id" => $utama->business_id,
                ]);
            }
        }
        return redirect()->route('admin.program');
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

    public function preview(Utama $utama)
    {
        $people = People::first();
        return view('user.proposal.utama', compact('utama', 'people'));
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

        return redirect()->route('admin.program.utama', $utama->business->id);
    }

    public function approve_pimpinan(Utama $utama)
    {
        if (Auth::user()->user_role == 2 || Auth::user()->user_role == 4) {
            $utama->business->update([
                'status' => 4,
                'business_status_id' => 4,
                'approved_by_pimpinan_at' => Carbon::now(),
                'rejected_at' => null,
            ]);
            BusinessLog::create([
                'description' => 'Disetujui (Pimpinan) oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
                'business_id' => $utama->business->id,
                'admin_id' => Auth::id()
            ]);
        }
        return redirect()->route('admin.program.utama', $utama->business->id);
    }

    public function reject(Utama $utama)
    {
        $utama->business->update([
            'status' => 5,
            'business_status_id' => 5,
            'rejected_at' => Carbon::now(),
        ]);
        BusinessLog::create([
            'description' => 'Ditolak oleh ' . Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'business_id' => $utama->business->id,
            'admin_id' => Auth::id()
        ]);
        return redirect()->route('admin.program.utama', $utama->business->id);
    }

    public function refresh_kelompok(Request $request)
    {
        $member = $request->member;
        $sector = $request->sector;
        $establishment_statuses = EstablishmentStatus::all();
        return view('admin.mangga.edit.inc.member_utama', compact('member', 'sector', 'establishment_statuses'));
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
    public function toko(Request $request, Utama $utama)
    {
        if ($request->logo) {
            $logo = 'mangga-muda-' . time() . '-' . $request['logo']->getClientOriginalName();
            $request->logo->move(public_path('uploads/mangga/logos'), $logo);
        } else {
            $logo = $utama->business->logo;
        }
        $utama->business->user->update([
            'google_maps' => $request->google_maps
        ]);
        $utama->update([
            'instagram' => $request->instagram,
            'toko_description' => $request->description
        ]);
        $utama->business->update([
            'logo' => $logo
        ]);
        return redirect()->route('admin.program.utama', $utama->business->id);
    }
}
