<?php

namespace Artem\Patterns\Behavioral\Memento\Classes;

class Product
{
    public int $id;
    public string $name;
    public float $price;

    /**
     * @param int $id
     * @param string $name
     * @param float $price
     */
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return "Product{id:" . $this->id . "; name:" . $this->name . "; price:" . $this->price . "}";
    }


}