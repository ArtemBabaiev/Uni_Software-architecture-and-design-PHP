<?php

namespace Artem\Patterns\Behavioral\Memento\Classes;

class Order
{
    private array $products;

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function addProduct(Product $product){
        $this->products[] = $product;
    }
    public function save():Memento{

        //$arObj = new \ArrayObject($this->products);
        return new OrderMemento($this->products);
    }

}