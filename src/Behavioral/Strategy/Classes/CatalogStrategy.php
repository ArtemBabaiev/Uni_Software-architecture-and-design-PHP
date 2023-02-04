<?php

namespace Artem\Patterns\Behavioral\Strategy\Classes;

interface CatalogStrategy
{
    public function doSort(array $products): array;
}