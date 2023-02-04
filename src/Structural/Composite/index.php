<?php

use Artem\Patterns\Structural\Composite\Classes\CompositeProduct;
use Artem\Patterns\Structural\Composite\Classes\Food;
use Artem\Patterns\Structural\Composite\Classes\Phone;

require '../../../vendor/autoload.php';

$compositeProduct = new CompositeProduct(
    [new Food("food", 5, 15.5, new DateTime()),
        new Phone("phone", 6, 15.5, "i5 7200u")]
);
print_r($compositeProduct);
$compositeProduct->sell();
print_r($compositeProduct);
print_r($compositeProduct->price());
