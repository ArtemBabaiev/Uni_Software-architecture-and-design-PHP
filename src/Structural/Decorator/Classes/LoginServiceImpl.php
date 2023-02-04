<?php

namespace Artem\Patterns\Structural\Decorator\Classes;

class LoginServiceImpl implements ILoginService
{

    public function login(string $username, string $password): void
    {
        print_r("Login using -u:" . $username . ", -p:" . $password);

    }

    public function logout(): void
    {
        print_r("Logout");
    }
}