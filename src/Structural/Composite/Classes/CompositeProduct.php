<?php

namespace Artem\Patterns\Structural\Composite\Classes;

class CompositeProduct implements IProduct
{

    protected array $children = [];

    /**
     * @param array $children
     */
    public function __construct(array $children)
    {
        $this->children = $children;
    }


    function sell(): void
    {
        for ($i = 0; $i < count($this->children); $i++) {
            $this->children[$i]->sell();
        }
    }

    function add(): void
    {
        for ($i = 0; $i < count($this->children); $i++) {
            $this->children[$i]->add();
        }
    }

    function price(): float
    {
        $result = 0.0;
        for ($i = 0; $i < count($this->children); $i++) {
            $result += $this->children[$i]->price();
        }
        return $result;
    }

    public function addAll(array $products): void
    {
        foreach ($products as $val) {
            $this->children[] = $val;
        }
    }
}