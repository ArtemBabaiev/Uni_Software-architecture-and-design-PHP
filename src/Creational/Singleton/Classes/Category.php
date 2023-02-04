<?php

namespace Artem\Patterns\Creational\Singleton\Classes;

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