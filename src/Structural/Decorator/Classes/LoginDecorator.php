<?php

namespace Artem\Patterns\Structural\Decorator\Classes;

class LoginDecorator implements ILoginService
{
    private ILoginService $loginService;

    /**
     * @param ILoginService $loginService
     */
    public function __construct(ILoginService $loginService)
    {
        $this->loginService = $loginService;
    }


    public function login(string $username, string $password): void
    {
        $this->loginService->login($username, $password);
    }

    public function logout(): void
    {
        $this->loginService->logout();

    }
}