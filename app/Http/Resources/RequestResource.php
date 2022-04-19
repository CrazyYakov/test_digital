<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => json_decode($this->data, true)['name'],
            'value' => json_decode($this->data, true)['value']
        ];
    }
}
