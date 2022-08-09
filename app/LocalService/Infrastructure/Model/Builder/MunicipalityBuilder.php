<?php

namespace App\LocalService\Infrastructure\Model\Builder;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class MunicipalityBuilder extends Builder
{
    public function getMunicipality($id, $federal_entity_id): Model|Collection|array|MunicipalityBuilder|null
    {
        return $this->where("federal_entity_id", $federal_entity_id)
                ->find($id);
    }
}
