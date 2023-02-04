<?php

namespace Artem\Patterns\Behavioral\State\Classes;

class BannedState implements State
{
    public User $user;

    function login(): void
    {
        print_r("User \"" . $this->user->username . "\" is banned, login denied\n");
    }

    function buyProduct(Product $product): void
    {
        print_r("User \"" . $this->user->username . "\" is banned, purchase denied\n");

    }

    function changeContext(User $user): void
    {
        $this->user = $user;
    }
}