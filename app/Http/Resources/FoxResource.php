<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoxResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'titulo' => $this->resource['data'][0]['title'],
            'data'   => $this->resource['data'][0]['date_created'],
            'imagem' => $this->resource['links'][0]['href'],
        ];
    }
}