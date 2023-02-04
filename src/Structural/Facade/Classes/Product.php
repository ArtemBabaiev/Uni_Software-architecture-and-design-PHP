<?php

namespace Artem\Patterns\Structural\Facade\Classes;

class Product
{
    public  int $id;
    public  string $name;
    public  int $quantity;
    public int $price;

    /**
     * @param int $id
     * @param string $name
     * @param int $quantity
     * @param int $price
     */
    public function __construct(int $id, string $name, int $quantity, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }


    public function sell(): void
    {
        $this->quantity--;
    }

}