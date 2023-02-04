<?php

namespace Artem\Patterns\Structural\Proxy\Classes;

interface ICatalog
{
    public function getAll(): array;

    public function getById(int $id): ?Product;
}