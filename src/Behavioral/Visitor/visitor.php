<?php

use Artem\Patterns\Behavioral\Visitor\Classes\Computer;
use Artem\Patterns\Behavioral\Visitor\Classes\ComputerPartVisitorImpl;

require '../../../vendor/autoload.php';
$computer = new Computer();
$computer->accept(new ComputerPartVisitorImpl());