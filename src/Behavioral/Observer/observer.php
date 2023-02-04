<?php

use Artem\Patterns\Behavioral\Observer\Classes\Product;
use Artem\Patterns\Behavioral\Observer\Classes\User;

require '../../../vendor/autoload.php';

$product = new Product("name", 0);
$product->attach(new User("user1"));
$product->attach(new User("user2"));
$product->setQuantity(5);