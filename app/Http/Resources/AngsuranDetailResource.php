<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AngsuranDetailResource extends JsonResource
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
            "id"=> $this->id,
            "amount"=> $this->amount,
            "proof"=> $this->proof,
            "business_id"=> $this->business_id,
            "status"=> $this->status->name,
            "approved_at"=> $this->approved_at,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
