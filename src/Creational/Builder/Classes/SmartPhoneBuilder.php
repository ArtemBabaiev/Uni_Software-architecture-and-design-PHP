<?php

namespace Artem\Patterns\Creational\Builder\Classes;

class SmartPhoneBuilder
{
    public int $id;
    public String $name;
    public String $productNumber;
    public int $ram;
    public String $cpu;
    public String $screen;

    public function withId(int $id): SmartPhoneBuilder{
        $this->id = $id;
        return $this;
    }

public function withName(String $name): SmartPhoneBuilder{
    $this->name = $name;
    return $this;
}
    public function withProductNumber(String $productNumber): SmartPhoneBuilder{
    $this->productNumber = $productNumber;
    return $this;
}
    public function withRam(int $ram): SmartPhoneBuilder{
    $this->ram = $ram;
    return $this;
}
    public function withCpu(String $cpu): SmartPhoneBuilder{
    $this->cpu = $cpu;
    return $this;
}
    public function withScreen(String $screen): SmartPhoneBuilder{
    $this->screen = $screen;
    return $this;
}
    public function build(): SmartPhone{
        return new SmartPhone($this->id, $this->name, $this->productNumber, $this->ram, $this->cpu, $this->screen);
    }
}