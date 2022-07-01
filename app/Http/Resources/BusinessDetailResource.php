<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BusinessDetailResource extends JsonResource
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
            "id" => 2,
            "registration_number" => $this->registration_number,
            "name" => $this->name,
            "logo" => $this->logo,
            "address" => $this->address,
            "type" => $this->type,
            "instagram" => $this->instagram,
            "asset_value" => $this->asset_value,
            "postal_code" => $this->postal_code,
            "user_id" => $this->user_id,
            "sector" => $this->sector->name,
            "subsector" => $this->subsector->name,
            "province" => $this->province->name,
            "city" => $this->city->name,
            "district" => $this->district->name,
            "village" => $this->village->name,
            "mangga_type" => $this->mangga_type,
            "business_status_id" => $this->business_status_id,
            "approved_by_surveyor_at" => $this->approved_by_surveyor_at,
            "approved_by_pimpinan_at" => $this->approved_by_pimpinan_at,
            "rejected_at" => $this->rejected_at,
        ];
    }
}
