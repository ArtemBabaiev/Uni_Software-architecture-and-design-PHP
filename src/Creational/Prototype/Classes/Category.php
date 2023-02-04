<?php

namespace Artem\Patterns\Creational\Prototype\Classes;

class Category
{
    public string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

}