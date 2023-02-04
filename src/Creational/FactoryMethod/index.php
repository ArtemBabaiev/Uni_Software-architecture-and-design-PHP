<?php

use Artem\Patterns\Creational\FactoryMethod\Classes\LaptopFactory;

require '../../../vendor/autoload.php';

$factory = new LaptopFactory();
$computer = $factory->getComputer("8GB", "1TB", "i5 7200U");
print_r($computer);

