<?php

namespace Artem\Patterns\Creational\FactoryMethod\Classes;

class LaptopFactory extends ComputerFactory
{

    public function getComputer(string $ram, string $hdd, string $cpu): Computer
    {
        return new Laptop($ram, $hdd, $cpu);
    }
}