<?php

namespace Artem\Patterns\Behavioral\Command\Classes;

interface ICommand
{
    public function execute(): void;
}