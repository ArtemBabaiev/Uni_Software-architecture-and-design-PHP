<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

class Monitor implements ComputerPart
{

    /**
     * @param ComputerPartVisitor $computerPartVisitor
     * @return void
     */
    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visitMonitor($this);
    }
}