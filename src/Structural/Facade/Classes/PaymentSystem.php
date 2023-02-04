<?php

namespace Artem\Patterns\Structural\Facade\Classes;

class PaymentSystem
{
    public function pay(int $charge): void{
        print_r("payment charge: " . $charge . "\n");
    }

}