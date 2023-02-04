<?php

namespace Artem\Patterns\Behavioral\Strategy\Classes;

class CatalogNameSort implements CatalogStrategy
{

    public function doSort(array $products): array
    {

        usort($products, function (Product $pr1, Product $pr2): int
        {
            if ($pr1->name == $pr2->name) {
                return 0;
            }
            return $pr1->name < $pr2->name ? -1 : 1;
        });
        return $products;
    }
}
