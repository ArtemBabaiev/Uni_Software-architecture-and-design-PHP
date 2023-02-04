<?php
use Artem\Patterns\Creational\Singleton\Classes\Category;
use Artem\Patterns\Creational\Singleton\Classes\Product;
use Artem\Patterns\Creational\Singleton\Classes\Catalog;

require '../../../vendor/autoload.php';

$catalog = Catalog::getInstance();
$catalog1 = Catalog::getInstance();

$product1 = new Product("name1", "11111111", "desc1", 11, 11, 11, ["char10"=>"value",
    "char11"=>"value" ], new Category("categoryName"));

$product2 = new Product("name2", "22222222", "desc2", 12, 12, 12, ["char20"=>"value",
    "char21"=>"value" ], new Category("categoryName"));

$catalog->add_product($product1);
$catalog1->add_product($product2);
$product1->name = "new Name";
//print_r($catalog->get_by_id($product1->id));
$catalog->showAll();
