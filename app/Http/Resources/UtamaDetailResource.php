<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UtamaDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_name" => $this->user_name,
            "user_npwp" => $this->user_npwp,
            "user_spouse" => $this->user_spouse,
            "user_birth_date" => $this->user_birth_date,
            "user_birth_place" => $this->user_birth_place,
            "user_ktp_code" => $this->user_ktp_code,
            "user_kk_code" => $this->user_kk_code,
            "user_profession" => $this->user_profession,
            "user_gender" => $this->user_gender,
            "user_address" => $this->user_address,
            "user_rt" => $this->user_rt,
            "user_rw" => $this->user_rw,
            "user_village" => $this->user_village,
            "user_district" => $this->user_district,
            "user_city" => $this->user_city,
            "user_province" => $this->user_province,
            "user_postal_code" => $this->user_postal_code,
            "user_email" => $this->user_email,
            "user_phone" => $this->user_phone,
            "user_bank_branch" => $this->user_bank_branch,
            "user_bank_number" => $this->user_bank_number,
            "request_amount" => $this->request_amount,
            "member_count" => $this->member_count,
            "collateral" => $this->collateral,
            "distribution_type" => $this->distributiontype->name,
            "best_product" => $this->best_product,
            "business_form" => $this->businessform->name,
            "business_value" => $this->business_value,
            "hr_value" => $this->hr_value,
            "turnover_value" => $this->turnover_value,
            "sales_value" => $this->sales_value,
            "total_cost" => $this->total_cost,
            "unit_amount" => $this->unit_amount,
            "land" => $this->land,
            "building" => $this->building,
            "treasury" => $this->treasury,
            "credit" => $this->credit,
            "production_tools" => $this->production_tools,
            "savings" => $this->savings,
            "supply" => $this->supply,
            "vehicle" => $this->vehicle,
            "export_to" => $this->export_to,
            "marketing" => $this->marketing->name,
            "product_distributor" => $this->product_distributor,
            "business_problem" => $this->business_problem,
            "establishment_picture" => $this->establishment_picture,
            "product_picture" => $this->product_picture,
            "business_sketch" => $this->business_sketch,
            "house_sketch" => $this->house_sketch,
            "mail_address" => $this->mail_address,
            "telephone" => $this->telephone,
            "handphone" => $this->handphone,
            "email" => $this->email,
            "siup_code" => $this->siup_code,
            "siup_date" => $this->siup_date,
            "establishment_status" => $this->establishmentstatus->name,
            "ktp" => $this->ktp,
            "ktp_selfie" => $this->ktp_selfie,
            "kk" => $this->kk,
            "kk_selfie" => $this->kk_selfie,
            "siup" => $this->siup,
            "skdu" => $this->skdu,
            "business" => $this->business->name,
            "complete_form" => $this->complete_form,
            "companion_name" => $this->companion_name,
            "companion_ktp_code" => $this->companion_ktp_code,
            "companion_wedding_code" => $this->companion_wedding_code,
            "companion_wedding_date" => $this->companion_wedding_date,
            "companion_address" => $this->companion_address,
            "companion_province" => $this->companion_province,
            "companion_city" => $this->companion_city,
            "companion_district" => $this->companion_district,
            "companion_village" => $this->companion_village,
            "companion_postal_code" => $this->companion_postal_code,
            "companion_telephone" => $this->companion_telephone,
            "companion_handphone" => $this->companion_handphone,
            "companion_email" => $this->companion_email,
            "instagram" => $this->instagram,
            "toko_description" => $this->toko_description,
            "service_fee" =>$this->service_fee6,
        ];
    }
}
