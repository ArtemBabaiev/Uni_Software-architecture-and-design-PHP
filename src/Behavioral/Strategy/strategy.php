<?php

use Artem\Patterns\Behavioral\Strategy\Classes\Catalog;
use Artem\Patterns\Behavioral\Strategy\Classes\CatalogNameSort;
use Artem\Patterns\Behavioral\Strategy\Classes\CatalogPriceSort;

require '../../../vendor/autoload.php';

$catalog = new Catalog(new CatalogNameSort());
$catalog->sortProducts();
foreach ($catalog->getProducts() as $value){
    echo $value . ", ";
}
echo "\n";
$catalog->setStrategy(new CatalogPriceSort());
$catalog->sortProducts();
foreach ($catalog->getProducts() as $value){
    echo $value . ", ";
}