<?php

use Artem\Patterns\Creational\Prototype\Classes\Category;
use Artem\Patterns\Creational\Prototype\Classes\Product;

require '../../../vendor/autoload.php';

$product1 = new Product("name1", "11111111", "desc1", 11, 11, 11, ["char10"=>"value",
    "char11"=>"value" ], new Category("categoryName"));
$product2 = clone $product1;
$product1->name = "UPD";
$product1->category->name = "UPD_CATEGORY";
$product1->characteristic["newChar"] = "newChar";

print_r($product1);
print_r($product2);