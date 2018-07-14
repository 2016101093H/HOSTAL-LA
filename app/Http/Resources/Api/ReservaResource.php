<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => $this->type,
            'inicio' => $this->inicio,
<<<<<<< HEAD
            'cant_dias' => $this->cant_dias
=======
            'cant_dias' => $this->cant_dias,
            'cant_hab' => $this->cant_hab
>>>>>>> origin/joserb
        ];

    }
}
