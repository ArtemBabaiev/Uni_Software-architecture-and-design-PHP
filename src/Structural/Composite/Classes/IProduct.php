<?php

namespace Artem\Patterns\Structural\Composite\Classes;

interface IProduct
{
    function sell(): void;

    function add(): void;

    function price(): float;
}