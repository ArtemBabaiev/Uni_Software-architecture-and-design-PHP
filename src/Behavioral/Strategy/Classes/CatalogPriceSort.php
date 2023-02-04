<?php

namespace Artem\Patterns\Behavioral\Strategy\Classes;

class CatalogPriceSort implements CatalogStrategy
{

    /**
     * @param array $products
     * @return array
     */
    public function doSort(array $products): array
    {
        usort($products, function (Product $pr1, Product $pr2): int
        {
            if ($pr1->price == $pr2->price) {
                return 0;
            }
            return $pr1->price < $pr2->price ? -1 : 1;
        });
        return $products;
    }
}