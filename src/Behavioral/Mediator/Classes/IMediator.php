<?php

namespace Artem\Patterns\Behavioral\Mediator\Classes;

interface IMediator
{
    public function notify(string $event): void;
}