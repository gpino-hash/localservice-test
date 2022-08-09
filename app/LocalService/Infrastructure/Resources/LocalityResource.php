<?php

namespace App\LocalService\Infrastructure\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class LocalityResource extends JsonResource
{
    use ReplaceStr;
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
            "zip_code" => (string)substr(str_repeat(0, 5).$this[0]->zip_code, -5),
            "locality" => empty($this[0]->city) ? "" : $this->replaceStr($this[0]->city),
            "federal_entity" => [
                "key" => intval($this[0]->federalEntity->id),
                "name" => $this->replaceStr($this[0]->federalEntity->name),
                "code" => null
            ],
            "settlements" => new SettlementResource($this[0]->settlement),
            "municipality" => [
                "key" => intval($this[1]->id),
                "name" => $this->replaceStr($this[1]->name),
            ]
        ];
    }
}
