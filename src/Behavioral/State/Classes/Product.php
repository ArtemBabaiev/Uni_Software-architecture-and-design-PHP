<?php

namespace Artem\Patterns\Behavioral\State\Classes;

class Product
{
    public string $name;

    /**
     * @param String $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


}