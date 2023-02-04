<?php

namespace Artem\Patterns\Structural\Proxy\Classes;

class CatalogDB implements ICatalog
{
    private array $products;

    /**
     * @param array $products
     */
    public function __construct()
    {
        $this->products = [
            1 => new Product(1, "name1"),
            2 => new Product(2, "name2"),
            3 => new Product(3, "name5"),
            4 => new Product(4, "name4")];
    }


    public function getAll(): array
    {
        return $this->products;
    }

    public function getById(int $id): ?Product
    {
        try {
            return $this->products[$id];
        } catch (\Exception){}
        return null;
    }
}