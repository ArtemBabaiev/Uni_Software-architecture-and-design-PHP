<?php

namespace Artem\Patterns\Structural\Bridge\Classes;

class PaymentImpl extends Payment
{


    public function __construct(PaymentMethod $paymentMethod, string $cardNumber, float $price)
    {
        parent::__construct($paymentMethod, $cardNumber, $price);
    }

    public function commitPayment(): void
    {
        print_r("Payment commit" . "\n");
        $this->paymentMethod->pay($this->cardNumber, $this->price);
    }
}