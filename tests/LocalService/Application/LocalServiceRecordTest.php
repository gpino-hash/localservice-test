<?php

namespace Tests\LocalService\Application;

use App\LocalService\Application\LocalServiceRecord;
use App\LocalService\Domain\LocalServiceRepository;
use App\LocalService\Domain\ZipCodeDto;

it("Check when the query is null throw an exception", function () {
    $repository = \Mockery::mock(LocalServiceRepository::class);
    $zipCode = new ZipCodeDto();
    $localService = new LocalServiceRecord($repository, $zipCode);
    $localService->search(21212121);
})->throws(\Exception::class);

it("Check that it returns the desired query", function () {
    $zipCode = new ZipCodeDto();
    $repository = \Mockery::mock(LocalServiceRepository::class);
    $repository->shouldReceive("search")
        ->with($zipCode)
        ->andReturn(["test"]);
    $localService = new LocalServiceRecord($repository, $zipCode);
    expect(["test"])->toBe($localService->search(21212121));
});
