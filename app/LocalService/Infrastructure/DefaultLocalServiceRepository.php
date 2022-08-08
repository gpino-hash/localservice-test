<?php

namespace App\LocalService\Infrastructure;

use App\LocalService\Domain\LocalServiceRepository;
use App\LocalService\Domain\ZipCodeDto;
use App\LocalService\Infrastructure\Model\Builder\LocalityBuilder;
use App\LocalService\Infrastructure\Model\Locality;

class DefaultLocalServiceRepository implements LocalServiceRepository
{

    /**
     * @inheritDoc
     */
    public function search(ZipCodeDto $zipCodeDto): LocalityBuilder|Locality|null
    {
        return Locality::query()->getLocationByZipCode($zipCodeDto->getZipCode());
    }
}
