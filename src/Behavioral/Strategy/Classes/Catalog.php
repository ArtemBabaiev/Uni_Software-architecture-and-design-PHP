<?php

namespace Artem\Patterns\Behavioral\Strategy\Classes;

class Catalog
{
    public array $products;
    private CatalogStrategy $strategy;

    /**
     * @param CatalogStrategy $strategy
     */
    public function __construct(CatalogStrategy $strategy)
    {
        $this->products = [
            new Product("Name", 15.6),
            new Product("Aljsdf", 99),
            new Product("ZYX", 78)
        ];
        $this->strategy = $strategy;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param CatalogStrategy $strategy
     */
    public function setStrategy(CatalogStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function sortProducts(): void
    {
        $this->products = $this->strategy->doSort($this->products);
    }

}