<?php

namespace Tests\LocalService\Domain;

use App\LocalService\Domain\ZipCodeDto;

it("check if the zip-code is never null otherwise throw an exception", function () {
    $code = new ZipCodeDto();
    $code->setZipCode(null);
})->throws(\TypeError::class);

it("check that the zip-code is not null", function () {
    $code = new ZipCodeDto();
    $code->setZipCode(123);
    expect($code->getZipCode())->toBeInt()->toBe(123);
});

it("check when the zip-code is a number string not error", function () {
    $code = new ZipCodeDto();
    $code->setZipCode("123");
    expect($code->getZipCode())->toBeInt()->toBe(123);
});

it("check when the zip-code is a string throw the TypeError exception", function () {
    $code = new ZipCodeDto();
    $code->setZipCode("test");
})->throws(\TypeError::class);
