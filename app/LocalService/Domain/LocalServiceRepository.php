<?php

namespace App\LocalService\Domain;

use App\LocalService\Infrastructure\Model\Builder\LocalityBuilder;
use App\LocalService\Infrastructure\Model\Locality;
use Illuminate\Database\Eloquent\Builder;

interface LocalServiceRepository
{
    /**
     * @param ZipCodeDto $zipCodeDto
     * @return LocalityBuilder|Builder|null
     */
    public function search(ZipCodeDto $zipCodeDto): LocalityBuilder|Locality|null;
}
