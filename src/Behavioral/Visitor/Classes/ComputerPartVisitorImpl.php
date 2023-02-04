<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

class ComputerPartVisitorImpl implements ComputerPartVisitor
{

    public function visitComputer(Computer $computer): void
    {
        print_r("displaying computer\n");
    }

    public function visitKeyboard(Keyboard $keyboard): void
    {
        print_r("displaying keyboard\n");

    }

    public function visitMonitor(Monitor $monitor): void
    {
        print_r("displaying monitor\n");
    }
}