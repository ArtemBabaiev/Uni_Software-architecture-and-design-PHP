<?php

namespace Artem\Patterns\Behavioral\TemplateMethod\Classes;

abstract class ServiceAuth
{
    public function login(): ?User
    {
        if ($this->tryConnect()) {
            $strings = $this->requestData();
            return $this->handleCallback($strings[0], $strings[1]);
        }
        return null;
    }

    public function handleCallback(string $username, string $password)
    {
        return new User($username, $password);
    }

    public abstract function tryConnect(): bool;

    public abstract function requestData(): array;
}