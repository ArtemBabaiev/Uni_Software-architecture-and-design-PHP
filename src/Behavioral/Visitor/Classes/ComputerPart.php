<?php

namespace Artem\Patterns\Behavioral\Visitor\Classes;

interface ComputerPart
{
    public function accept(ComputerPartVisitor $computerPartVisitor):void;
}