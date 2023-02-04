<?php

namespace Artem\Patterns\Creational\AbstractFactory\Classes;

use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Laptop;
use Artem\Patterns\Creational\AbstractFactory\Classes\Entities\Phone;
use Artem\Patterns\Creational\AbstractFactory\Classes\Factories\SetFactory;

class TechSet
{
    public Phone $phone;
    public Laptop $laptop;
    public function __construct(SetFactory $setFactory)
    {
        $this->phone = $setFactory->createPhone();
        $this->laptop = $setFactory->createLaptop();
    }
}