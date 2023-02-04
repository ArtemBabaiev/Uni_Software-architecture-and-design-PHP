<?php

namespace Artem\Patterns\Structural\Composite\Classes;

abstract class BaseProduct implements IProduct
{

    public String $name;
    public int $quantity;
    public float $price;

    /**
     * @param String $name
     * @param int $quantity
     * @param float $price
     */
    public function __construct(string $name, int $quantity, float $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }


    function sell(): void
    {
        print_r("Sold one " . get_class($this));
        $this->quantity--;
    }

    function add(): void
    {
        print_r("Added one " . get_class($this));
        $this->quantity++;
    }

    function price(): float
    {
        return $this->price;
    }
}