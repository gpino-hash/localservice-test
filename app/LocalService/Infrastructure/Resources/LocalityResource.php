<?php

namespace App\LocalService\Infrastructure\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class LocalityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    #[ArrayShape(["zip_code" => "mixed", "locality" => "mixed", "federal_entity" => "mixed", "settlements" => "mixed", "municipality" => "array"])]
    public function toArray($request): array
    {
        return [
            "zip_code" => $this[0]->zip_code,
            "locality" => strtoupper($this[0]->city),
            "federal_entity" => $this[0]->federalEntity,
            "settlements" => $this[0]->settlement,
            "municipality" => [
                "key" => $this[1]->id,
                "name" => strtoupper($this[1]->name),
            ]
        ];
    }
}
