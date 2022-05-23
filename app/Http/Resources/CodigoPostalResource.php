<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CodigoPostalResource extends JsonResource
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
            'key' => $this->id_asenta_cpcons,
            'name' => mb_strtoupper($this->d_asenta),
            'zone_type' => mb_strtoupper($this->d_zona),
            'settlement_type' => [
                'name' => $this->d_tipo_asenta
            ],
        ];
    }
}
