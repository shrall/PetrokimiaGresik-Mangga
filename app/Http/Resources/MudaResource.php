<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MudaResource extends JsonResource
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
            'muda' => $this->business->muda,
            'business' => $this->business,
            'members' => $this->members,
            'reports' => $this->reports,
        ];
    }
}
