<?php

namespace Artem\Patterns\Behavioral\Strategy\Classes;

class Product
{
    public string $name;
    public float $price;

    /**
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Product(name=$this->name, price=$this->price)";
    }


}