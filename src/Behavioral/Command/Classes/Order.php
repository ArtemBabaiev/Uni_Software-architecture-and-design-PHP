<?php

namespace Artem\Patterns\Behavioral\Command\Classes;

class Order
{
    public string $id;
    public string $number;
    public float $price;

    /**
     * @param string $id
     * @param String $number
     * @param float $price
     */
    public function __construct(string $id, string $number, float $price)
    {
        $this->id = $id;
        $this->number = $number;
        $this->price = $price;
    }

    public function __toString(): string
    {
        return "id:" . $this->id . "; number:" . $this->number . "; price:" . $this->price;
    }

}