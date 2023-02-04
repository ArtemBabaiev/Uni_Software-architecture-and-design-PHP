<?php

namespace Artem\Patterns\Structural\Bridge\Classes;

class CreditCardMethod implements PaymentMethod
{
    public function pay(string $card, float $price): void
    {
        print_r("Credit card payment using card: " . $card . " price: " . $price . "\n");
    }
}