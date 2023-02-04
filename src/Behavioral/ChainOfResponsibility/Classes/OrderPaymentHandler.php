<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

class OrderPaymentHandler extends AbstractHandler
{
    public function __construct(?IOrderHandler $nextHandler)
    {
        parent::__construct($nextHandler);
    }

    public function handle(Order $order): void
    {
        print_r("Order payment accepted with card = " . $order->card->number . "\n");
        if ($this->getNextHandler() != null) {
            $this->getNextHandler()->handle($order);
        }
    }
}