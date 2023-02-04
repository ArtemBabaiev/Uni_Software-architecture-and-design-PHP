<?php

namespace Artem\Patterns\Behavioral\Iterator\Classes;

use Exception;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class Catalog implements \IteratorAggregate
{
    private array $products;

    /**
     * @param array $products
     */
    public function __construct()
    {
        $this->products = [
            new Product("1", "name1"),
            new Product("2", "name2"),
            new Product("3", "name3")
        ];
    }


    public function getIterator(): Traversable
    {
        return new CatalogIterator($this);
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function addItem(Product $product)
    {
        $this->products[] = $product;
    }

}