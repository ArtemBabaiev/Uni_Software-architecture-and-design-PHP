<?php

namespace Artem\Patterns\Structural\Bridge\Classes;

class EWalletMethod implements PaymentMethod
{

    public function pay(string $card, float $price): void
    {
        print_r("E wallet payment using card: " . $card . " price: " . $price . "\n");
    }
}