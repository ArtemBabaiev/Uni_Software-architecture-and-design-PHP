<?php

namespace Artem\Patterns\Creational\FactoryMethod\Classes;

abstract class Computer
{
    public abstract function getRAM(): string;

    public abstract function getHDD(): string;

    public abstract function getCPU(): string;

}