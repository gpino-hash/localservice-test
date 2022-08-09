<?php

namespace App\LocalService\Application;

use App\LocalService\Domain\LocalServiceRepository;
use App\LocalService\Domain\ZipCodeDto;
use App\LocalService\Infrastructure\Model\Builder\LocalityBuilder;
use App\LocalService\Infrastructure\Model\Locality;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Client\RequestException;
use Throwable;

class LocalServiceRecord
{
    public function __construct(private readonly LocalServiceRepository $repository, private readonly ZipCodeDto $dto)
    {
    }

    /**
     * @param string $code
     * @return array
     * @throws RequestException
     * @throws Throwable
     */
    public function search(string $code): array
    {
        $this->dto->setZipCode($code);
        $localService = $this->repository->search($this->dto);
        throw_if(empty($localService), new Exception("postal code does not exist!"));
        return $localService;
    }
}
