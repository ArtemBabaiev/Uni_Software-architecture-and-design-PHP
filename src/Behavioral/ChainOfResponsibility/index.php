<?php

use Artem\Patterns\Behavioral\ChainOfResponsibility\Classes\CreditCard;
use Artem\Patterns\Behavioral\ChainOfResponsibility\Classes\Order;
use Artem\Patterns\Behavioral\ChainOfResponsibility\Classes\OrderDbHandler;
use Artem\Patterns\Behavioral\ChainOfResponsibility\Classes\OrderPaymentHandler;
use Artem\Patterns\Behavioral\ChainOfResponsibility\Classes\Product;

require '../../../vendor/autoload.php';
$chain = new OrderPaymentHandler(new OrderDbHandler(null));

        $chain->handle(
            new Order(
                new CreditCard("4242 4242 4242 4242", "123"),
                new Product(1, "name")
            )
        );