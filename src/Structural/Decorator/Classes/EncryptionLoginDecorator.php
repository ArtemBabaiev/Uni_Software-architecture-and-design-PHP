<?php

namespace Artem\Patterns\Structural\Decorator\Classes;

class EncryptionLoginDecorator extends LoginDecorator
{
    /**
     * @param ILoginService $loginService
     */
    public function __construct(ILoginService $loginService)
    {
        parent::__construct($loginService);
    }

    public function login(string $username, string $password): void
    {
        parent::login($username, hash("md5", $password));
    }

    public function logout(): void
    {
        parent::logout();
    }
}
