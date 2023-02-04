<?php

namespace Artem\Patterns\Creational\FactoryMethod\Classes;

class Laptop extends Computer
{
    private string $ram;
    private string $hdd;
    private string $cpu;

    /**
     * @param string $ram
     * @param string $hdd
     * @param string $cpu
     */
    public function __construct(string $ram, string $hdd, string $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }

    public function getRAM(): string
    {
        return $this->ram;
    }

    public function getHDD(): string
    {
        return $this->hdd;
    }

    public function getCPU(): string
    {
        return $this->cpu;
    }
}