<?php

namespace App\LocalService\Domain;

final class ZipCodeDto
{

    private int $zipCode;

    /**
     * @return int
     */
    public function getZipCode(): int
    {
        return $this->zipCode;
    }

    /**
     * @param int|null $zipCode
     */
    public function setZipCode(?int $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

}
