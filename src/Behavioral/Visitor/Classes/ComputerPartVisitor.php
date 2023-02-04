<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

interface ComputerPartVisitor
{
    public function visitComputer(Computer $computer): void;
    public function visitKeyboard(Keyboard $keyboard): void;
    public function visitMonitor(Monitor $monitor): void;
}