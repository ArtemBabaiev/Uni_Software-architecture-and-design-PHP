<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

class Keyboard implements ComputerPart
{

    /**
     * @param ComputerPartVisitor $computerPartVisitor
     * @return void
     */
    public function accept(ComputerPartVisitor $computerPartVisitor): void
    {
        $computerPartVisitor->visitKeyboard($this);
    }
}