<?php

namespace Artem\Patterns\Structural\Bridge\Classes;

interface PaymentMethod
{
    public function pay(String $card, float $price): void;
}