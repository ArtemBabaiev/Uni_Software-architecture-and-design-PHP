<?php

namespace Artem\Patterns\Structural\Facade\Classes;

class Warehouse
{
    private array $productList;

    /**
     * @param array $productList
     */
    public function __construct()
    {
        $this->productList = [
            1 => new Product(1, "name1", 3, 15),
            2 => new Product(2, "name2", 3, 15),
            3 => new Product(3, "name3", 3, 15)
        ];
    }


    public function getProduct(int $id): Product
    {
        return $this->productList[$id];
    }

    public function sellProduct(int $id): void
    {
        $this->productList[$id]?->sell();
    }
}