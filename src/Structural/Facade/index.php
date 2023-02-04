<?php

use Artem\Patterns\Structural\Facade\Classes\ShopFacade;

require '../../../vendor/autoload.php';

$shopFacade = new ShopFacade();
print_r($shopFacade->getProduct(2));
$shopFacade->buy(2);
print_r($shopFacade->getProduct(2));