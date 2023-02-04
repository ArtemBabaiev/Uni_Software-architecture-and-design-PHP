<?php

namespace Artem\Patterns\Creational\AbstractFactory\Classes\Factories;

use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\AppleLaptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\ApplePhone;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Laptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Phone;

class AppleSetFactory extends SetFactory
{

    public function createPhone(): Phone
    {
        return new ApplePhone();
    }

    public function createLaptop(): Laptop
    {
        return new AppleLaptop();
    }
}