<?php

namespace Artem\Patterns\Behavioral\State\Classes;

class ActiveState implements State
{

public User $user;


    /**
     * @return void
     */
    function login(): void
    {
        print_r("Login successful. Welcome " . $this->user->username ."\n");

    }

    /**
     * @param Product $product
     * @return void
     */
    function buyProduct(Product $product): void
    {
        print_r($this->user->username . "bought\n");
    }

    /**
     * @param User $user
     * @return void
     */
    function changeContext(User $user): void
    {
        $this->user = $user;
    }
}