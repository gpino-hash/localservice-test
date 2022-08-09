<?php

namespace App\LocalService\Domain;

interface LocalServiceRepository
{
    /**
     * @param ZipCodeDto $zipCodeDto
     * @return array
     */
    public function search(ZipCodeDto $zipCodeDto): array;
}
