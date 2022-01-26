<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'handphone' => $this->handphone,
            'ktp_code' => $this->ktp_code,
            'kk_code' => $this->kk_code,
            'profession' => $this->profession,
            'education' => $this->education->name,
            'religion' => $this->religion->name,
            'heir' => $this->heir,
            'house_ownership' => $this->house->name,
            "npwp" => $this->npwp,
            "bank_number" => $this->bank_number,
            "bank_owner" => $this->bank_owner,
            "bank_name" => $this->bank_name,
            "bank_branch" => $this->bank_branch,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "retired" => $this->retired,
            "gender" => $this->gender,
            "married" => $this->married,
            "spouse" => $this->spouse,
            "referral_code" => $this->referral_code,
            "user_role" => $this->role->name,
            "address" => $this->address,
            "province_id" => $this->province->name,
            "city_id" => $this->city->name,
            "district_id" => $this->district->name,
            "village_id" => $this->village->name,
            "rt" => $this->rt,
            "rw" => $this->rw,
            "postal_code" => $this->postal_code,
            "birth_date" => $this->birth_date,
            "birth_place" => $this->birthplace->name,
        ];
    }
}
