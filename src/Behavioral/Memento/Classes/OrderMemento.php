<?php

namespace Artem\Patterns\Behavioral\Memento\Classes;

class OrderMemento implements Memento
{
    private array $products;
    private string $createdAt;

    /**
     * @param array $products
     * @param \DateTime $createdAt
     */
    public function __construct(array $products)
    {
        $this->products = $products;
        $this->createdAt = date("Y-m-d H:i:s");
    }

    public function getProducts(): array
    {
        return $this->products;
    }

}