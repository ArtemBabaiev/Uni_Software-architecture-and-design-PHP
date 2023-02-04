<?php

namespace Artem\Patterns\Behavioral\State\Classes;

class User
{
    public string $username;
    public State $state;

    /**
     * @param string $username
     * @param State $state
     */
    public function __construct(string $username, State $state)
    {
        $this->username = $username;
        $this->changeState($state);
    }

    public function changeState(State $state): void
    {
        $this->state = $state;
        $this->state->changeContext($this);
    }

    public function auth(): void
    {
        $this->state->login();
    }

    public function purchase(Product $product): void
    {
        $this->state->buyProduct($product);
    }

}