<?php

namespace Artem\Patterns\Structural\Decorator\Classes;

interface ILoginService
{
    public function login(string $username, string $password): void;

    public function logout(): void;
}