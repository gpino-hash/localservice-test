<?php

namespace App\LocalService\Infrastructure;

use App\LocalService\Domain\LocalServiceRepository;
use App\LocalService\Domain\ZipCodeDto;
use App\LocalService\Infrastructure\Model\Locality;
use App\LocalService\Infrastructure\Model\Municipality;

class DefaultLocalServiceRepository implements LocalServiceRepository
{

    /**
     * @inheritDoc
     */
    public function search(ZipCodeDto $zipCodeDto): array
    {
        $locality = Locality::query()->getLocationByZipCode($zipCodeDto->getZipCode());
        $municipality = Municipality::query()->getMunicipality($locality->municipality_id, $locality->federal_entity_id);

        return [
            $locality,
            $municipality
        ];
    }
}
