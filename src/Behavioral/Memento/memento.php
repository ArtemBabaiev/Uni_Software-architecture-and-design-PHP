<?php

use Artem\Patterns\Behavioral\Memento\Classes\Order;
use Artem\Patterns\Behavioral\Memento\Classes\OrderCaretaker;
use Artem\Patterns\Behavioral\Memento\Classes\Product;

require '../../../vendor/autoload.php';
$order = new Order([
    new Product(1, "name1", 11),
    new Product(1, "name1", 12),
    new Product(1, "name1", 13)
]);
$caretaker = new OrderCaretaker($order);

$caretaker->backup();

$order->addProduct(new Product(9, "sdlajfsl", 99));

$caretaker->backup();

$caretaker->showHistory();

echo "-----------------------------------------------------------------------------";
echo "-----------------------------------------------------------------------------";

$caretaker->undo();

$caretaker->showHistory();
