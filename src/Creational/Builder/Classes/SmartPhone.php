<?php

namespace Artem\Patterns\Creational\Builder\Classes;

class SmartPhone
{
    public int $id;
    public String $name;
    public String $productNumber;
    public int $ram;
    public String $cpu;
    public String $screen;

    /**
     * @param int $id
     * @param String $name
     * @param String $productNumber
     * @param int $ram
     * @param String $cpu
     * @param String $screen
     */
    public function __construct(int $id, string $name, string $productNumber, int $ram, string $cpu, string $screen)
    {
        $this->id = $id;
        $this->name = $name;
        $this->productNumber = $productNumber;
        $this->ram = $ram;
        $this->cpu = $cpu;
        $this->screen = $screen;
    }



}