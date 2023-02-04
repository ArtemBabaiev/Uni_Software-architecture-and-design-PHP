<?php

namespace Artem\Patterns\Creational\AbstractFactory\Classes\Factories;

use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Laptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Phone;

abstract class SetFactory
{
    public abstract function createPhone(): Phone;
    public abstract function createLaptop(): Laptop;
}