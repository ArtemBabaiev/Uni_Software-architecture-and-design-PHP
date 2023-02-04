<?php

namespace Artem\Patterns\Creational\AbstractFactory\Classes\Factories;

use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Laptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Phone;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\SamsungLaptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\SamsungPhone;

class SamsungSetFactory extends SetFactory
{

    public function createPhone(): Phone
    {
        return new SamsungPhone();
    }

    public function createLaptop(): Laptop
    {
        return new SamsungLaptop();
    }
}