<?php

namespace Artem\Patterns\Behavioral\State\Classes;

interface State
{
    function login(): void;
    function buyProduct(Product $product): void;
    function changeContext(User $user): void;
}