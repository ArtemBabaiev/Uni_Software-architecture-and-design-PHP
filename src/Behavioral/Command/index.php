<?php

use Artem\Patterns\Behavioral\Command\Classes\Order;
use Artem\Patterns\Behavioral\Command\Classes\OrderDbCommand;
use Artem\Patterns\Behavioral\Command\Classes\OrderPaymentCommand;
use Artem\Patterns\Behavioral\Command\Classes\OrderService;

require '../../../vendor/autoload.php';
$order = new Order("1", "123", 153);
$order1 = new Order("2", "123", 153);
$orderService = new OrderService([new OrderPaymentCommand($order, "4242 4242 4242 4242"), new OrderDbCommand($order)]);
$orderService->addCommand(new OrderDbCommand($order1));
$orderService->executeCommands();