<?php

namespace Artem\Patterns\Structural\Composite\Classes;

class Phone extends BaseProduct
{
    public string $cpu;

    public function __construct(string $name, int $quantity, float $price, string $cpu)
    {
        parent::__construct($name, $quantity, $price);
        $this->cpu = $cpu;
    }
}