<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessAsset;
use App\Models\BusinessCommodity;
use App\Models\BusinessPlan;
use App\Models\BusinessProduct;
use App\Models\Utama;
use App\Models\UtamaMember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
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
            "sector.required" => 'Sektor Bisnis',
            "subsector.required" => 'Sub Sektor Bisnis',
            "type.required" => 'Jenis Usaha',
            "asset_value.required" => 'Nilai Asset Usaha',
            "address.required" => 'Alamat Usaha',
            "province.required" => 'Provinsi Usaha',
            "city.required" => 'Kota Usaha',
            "district.required" => 'Kecamatan Usaha',
            "village.required" => 'Desa Usaha',
            "postal_code.required" => 'Kode Pos Usaha',
            "request_amount.required" => 'Jumlah Pengajuan',
            "unit_amount.required" => 'Jumlah Unit Usaha',
            "collateral.required" => 'Agunan',
            "distribution_type.required" => 'Tipe Penyaluran',
            "business_form.required" => 'Bentuk Usaha',
            "business_value.required" => 'Nilai Usaha',
            "hr_value.required" => 'Jumlah SDM',
            "turnover_value.required" => 'Nilai Omzet per Tahun',
            "telephone.required" => 'No. Telp Usaha',
            "handphone.required" => 'No. HP Usaha',
            "establishment_status.required" => 'Status Tempat Usaha',
            "ktp.required" => 'Foto KTP',
            "ktp_selfie.required" => 'Foto KTP Selfie',
            "kk.required" => 'Foto KK',
            "kk_selfie.required" => 'Foto KK Selfie',
            "skdu.required" => 'Surat Keterangan',
            "sales_value.required" => 'Nilai Penjualan',
            "total_cost.required" => 'Biaya Total',
            "business_problem.required" => 'Permasalahan Usaha',
            "establishment_picture.required" => 'Foto Tempat Usaha/Rumah',
            "product_picture.required" => 'Foto Produk/Komoditas',
        ];
        if ($request->member_name) {
            foreach ($request->member_name as $key => $value) {
                $messages["member_name.$key.required"] = "Nama Anggota {$key}";
                $messages["member_phone.$key.required"] = "Nomor Telepon Anggota {$key}";
                $messages["member_ktp_code.$key.required"] = "No. KTP Anggota {$key}";
                $messages["member_ktp.$key.required"] = "Foto KTP Anggota {$key}";
                $messages["member_ktp_selfie.$key.required"] = "Foto KTP Selfie Anggota {$key}";
            };

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                "sector" => 'required',
                "subsector" => 'required',
                "type" => 'required',
                "asset_value" => 'required',
                "address" => 'required',
                "province" => 'required',
                "city" => 'required',
                "district" => 'required',
                "village" => 'required',
                "postal_code" => 'required',
                "request_amount" => 'required',
                "collateral" => 'required',
                "distribution_type" => 'required',
                "business_form" => 'required',
                "business_value" => 'required',
                "hr_value" => 'required',
                "turnover_value" => 'required',
                "telephone" => 'required',
                "handphone" => 'required',
                "establishment_status" => 'required',
                "unit_amount" => 'required',
                "ktp" => 'required',
                "ktp_selfie" => 'required',
                "kk" => 'required',
                "kk_selfie" => 'required',
                "skdu" => 'required',
                "sales_value" => 'required',
                "total_cost" => 'required',
                "business_problem" => 'required',
                "establishment_picture" => 'required',
                "product_picture" => 'required',
                "member_name" => 'required|array|min:' . $request->member_count,
                "member_phone" => 'required|array|min:' . $request->member_count,
                "member_ktp_code" => 'required|array|min:' . $request->member_count,
                "member_ktp" => 'required|array|min:' . $request->member_count,
                "member_ktp_selfie" => 'required|array|min:' . $request->member_count,
                "member_name.*" => 'required',
                "member_phone.*" => 'required',
                "member_ktp_code.*" => 'required',
                "member_ktp.*" => 'required',
                "member_ktp_selfie.*" => 'required',
            ], $messages);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                "sector" => 'required',
                "subsector" => 'required',
                "type" => 'required',
                "asset_value" => 'required',
                "address" => 'required',
                "province" => 'required',
                "city" => 'required',
                "district" => 'required',
                "village" => 'required',
                "postal_code" => 'required',
                "request_amount" => 'required',
                "collateral" => 'required',
                "distribution_type" => 'required',
                "business_form" => 'required',
                "business_value" => 'required',
                "hr_value" => 'required',
                "turnover_value" => 'required',
                "telephone" => 'required',
                "handphone" => 'required',
                "establishment_status" => 'required',
                "unit_amount" => 'required',
                "ktp" => 'required',
                "ktp_selfie" => 'required',
                "kk" => 'required',
                "kk_selfie" => 'required',
                "skdu" => 'required',
                "sales_value" => 'required',
                "total_cost" => 'required',
                "business_problem" => 'required',
                "establishment_picture" => 'required',
                "product_picture" => 'required',
            ], $messages);
        }

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

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

            foreach ($request->member_certificate as $key => $mc) {
                if ($request->member_certificate[strval($key)]) {
                    $mcf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_certificate'][strval($key)]->getClientOriginalName();
                    $request->member_certificate[strval($key)]->move(public_path('uploads/mangga/certificate'), $mcf[strval($key)]);
                } else {
                    $mcf[strval($key)] = null;
                }
            }

            foreach ($request->member_certificate_selfie as $key => $mcs) {
                if ($request->member_certificate_selfie[strval($key)]) {
                    $mcsf[strval($key)] = 'mangga-utama-member-' . ($key + 1) . '-' . time() . '-' . $request['member_certificate_selfie'][strval($key)]->getClientOriginalName();
                    $request->member_certificate_selfie[strval($key)]->move(public_path('uploads/mangga/certificateselfie'), $mcsf[strval($key)]);
                } else {
                    $mcsf[strval($key)] = null;
                }
            }
            $mc_keys = array_keys($mcf);
            $mcs_keys = array_keys($mcsf);
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
            "user_id" => Auth::id()
        ]);

        $utama = Utama::create([
            'user_name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'user_npwp' => Auth::user()->npwp,
            'user_spouse' => Auth::user()->spouse,
            'user_birth_date' => Auth::user()->birth_date,
            'user_birth_place' => Auth::user()->birthplace->name,
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
                if (in_array(strval($key + 1), $mcf)) {
                    $umember = UtamaMember::create([
                        'name' => $request->member_name[$key],
                        'ktp_code' => $request->member_ktp_code[$key],
                        'phone' => $request->member_phone[$key],
                        'certificate_name' => $request->member_certificate_name[$key],
                        'certificate_address' => $request->member_certificate_address[$key],
                        'ktp' => $mktpf[$key],
                        'ktp_selfie' => $mktpsf[$key],
                        'certificate' => $mcf[strval($key + 1)],
                        "utama_id" => $utama->id,
                    ]);
                    $umember->update([
                        'certificate_selfie' => $mcsf[strval($key + 1)],
                    ]);
                }else{
                    $umember = UtamaMember::create([
                        'name' => $request->member_name[$key],
                        'ktp_code' => $request->member_ktp_code[$key],
                        'phone' => $request->member_phone[$key],
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

        foreach ($request->business_asset_name as $key => $value) {
            if ($value && $request->business_asset_value[$key]) {
                BusinessAsset::create([
                    'name' => $request->business_asset_name[$key],
                    'value' => $request->business_asset_value[$key],
                    "business_id" => $business->id,
                ]);
            }
        }

        foreach ($request->business_commodity_name as $key => $value) {
            if ($value && $request->business_commodity_value[$key]) {
                BusinessCommodity::create([
                    'name' => $request->business_commodity_name[$key],
                    'value' => $request->business_commodity_value[$key],
                    "business_id" => $business->id,
                ]);
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

        return redirect()->route('user.status_ajuan');
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

    public function preview(Utama $utama)
    {
        return view('user.proposal.utama', compact('utama'));
    }
    public function download(Utama $utama)
    {
        $pdf = PDF::loadview('user.proposal.utama', compact('utama'))->setOption('margin-bottom', '0mm')
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
        ]);

        return redirect()->route('user.status_ajuan');
    }
}