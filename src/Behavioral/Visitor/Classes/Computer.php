<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

class Computer implements ComputerPart
{
    public Keyboard $keyboard;
    public Monitor $monitor;

    public function __construct()
    {
        $this->keyboard = new Keyboard();
        $this->monitor = new Monitor();
    }


    /**
     * @param ComputerPartVisitor $computerPartVisitor
     * @return void
     */
    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visitKeyboard($this->keyboard);
        $computerPartVisitor->visitMonitor($this->monitor);
        $computerPartVisitor->visitComputer($this);
    }
}