<?php

namespace Artem\Patterns\Behavioral\TemplateMethod\Classes;

class GoogleAuth extends ServiceAuth
{

    public function tryConnect(): bool
    {
       return rand(0,1) == 1;
    }

    public function requestData(): array
    {
        return [uniqid(), uniqid()];
    }
}