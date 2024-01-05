<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'titulo'    => $this->titulo,
            'slug'      => $this->slug,
            'excerpt'   => $this->excerpt,
            'contenido' => $this->contenido,
        ];
    }
}
