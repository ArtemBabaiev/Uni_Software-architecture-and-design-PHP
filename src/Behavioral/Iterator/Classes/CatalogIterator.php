<?php

namespace Artem\Patterns\Behavioral\Iterator\Classes;

use JetBrains\PhpStorm\Internal\TentativeType;

class CatalogIterator implements \Iterator
{
    private Catalog $collection;
    private int $position = 0;

    /**
     * @param Catalog $collection
     */
    public function __construct(Catalog $collection)
    {
        $this->collection = $collection;
    }


    public function current(): mixed
    {
       return $this->collection->getProducts()[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position + 1;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getProducts()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}