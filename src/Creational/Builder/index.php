<?php

use Artem\Patterns\Creational\Builder\Classes\SmartPhoneBuilder;

require '../../../vendor/autoload.php';
$phoneBuilder = new SmartPhoneBuilder();
$phone = $phoneBuilder->withId(1)
    ->withName("Name")
    ->withCpu("i5 7200U")
    ->withRam(16)
    ->withScreen("1920*1080")
    ->withProductNumber("123456789")
    ->build();
print_r($phone);