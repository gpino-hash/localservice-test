<?php

namespace App\LocalService\Infrastructure\Model\Builder;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class LocalityBuilder extends Builder
{
    /**
     * @param $code
     * @return Model|$this|null
     */
    public function getLocationByZipCode($code): static|Model|null
    {
        return $this->with(["federalEntity", "settlement"])
            ->join("municipalities", function($join) {
                $join->on("municipalities.federal_entity_id", "=", "localities.federal_entity_id")
                    ->on("municipalities.id", "=", "localities.municipality_id");
            })->where("zip_code", $code)->first();
    }
}
