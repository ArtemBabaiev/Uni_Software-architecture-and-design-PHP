<?php

use Artem\Patterns\Creational\AbstractFactory\Classes\Factories\AppleSetFactory;
use Artem\Patterns\Creational\AbstractFactory\Classes\Factories\SamsungSetFactory;
use Artem\Patterns\Creational\AbstractFactory\Classes\TechSet;

require '../../../vendor/autoload.php';

$appleSet = new TechSet(new AppleSetFactory());
print_r($appleSet);
$samsungSet = new TechSet(new SamsungSetFactory());
print_r($samsungSet);