<?php

namespace App\Http\Resources\v2;

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
            'id'        => $this->id,
            'post_name' => $this->titulo,
            'slug'      => $this->slug,
            'content'   => $this->contenido,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'creado_en' => $this->created_at
          ];
    }
}
