<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UtamaResource extends JsonResource
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
            'utama' => UtamaDetailResource::make($this->business->utama),
            'business' => BusinessDetailResource::make($this->business),
            'members' => $this->members,
            'plans' => $this->business->plans,
            'commodities' => $this->business->commodities,
            'products' => $this->business->products,
            'angsurans' => AngsuranDetailResource::collection($this->business->angsurans)
        ];
    }
}
