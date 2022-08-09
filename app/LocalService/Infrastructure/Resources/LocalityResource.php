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
            "zip_code" => $this->zip_code,
            "locality" => $this->city,
            "federal_entity" => $this->federalEntity,
            "settlements" => $this->settlement,
            /*"municipality" => [
                "key" => $this->municipality_id,
                "name" => $this->name,
            ]*/
        ];
    }
}
