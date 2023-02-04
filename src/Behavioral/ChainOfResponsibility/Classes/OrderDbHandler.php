<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

class OrderDbHandler extends AbstractHandler
{
    public function __construct(?IOrderHandler $nextHandler)
    {
        parent::__construct($nextHandler);
    }

    public function handle(Order $order): void
    {
        print_r("Order added to DB for product = " . $order->product->name . "\n");
        if ($this->getNextHandler() != null) {
            $this->getNextHandler()->handle($order);
        }
    }
}