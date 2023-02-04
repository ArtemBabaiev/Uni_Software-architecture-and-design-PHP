<?php

namespace Artem\Patterns\Behavioral\Command\Classes;

class OrderPaymentCommand implements ICommand
{

    public Order $order;
    public string $cardNumber;

    /**
     * @param Order $order
     * @param string $cardNumber
     */
    public function __construct(Order $order, string $cardNumber)
    {
        $this->order = $order;
        $this->cardNumber = $cardNumber;
    }


    public function execute(): void
    {
        print_r("Payment with card=" . $this->cardNumber . " for order" . $this->order);
    }
}