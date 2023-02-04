<?php

namespace Artem\Patterns\Creational\FactoryMethod\Classes;

abstract class ComputerFactory
{
    public abstract function getComputer(string $ram, string $hdd, string $cpu): Computer;
}