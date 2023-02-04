<?php

namespace Artem\Patterns\Behavioral\Iterator\Classes;

class Product
{
    private int $id;
    private string $name;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "Product{ id:" . $this->id . "; name:" . $this->name . "}";
    }


}