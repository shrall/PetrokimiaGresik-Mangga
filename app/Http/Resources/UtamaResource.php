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
            'utama' => $this->business->utama,
            'business' => $this->business,
            'members' => $this->members,
            'plans' => $this->plans,
            'commodities' => $this->commodities,
            'products' => $this->products,
        ];
    }
}
