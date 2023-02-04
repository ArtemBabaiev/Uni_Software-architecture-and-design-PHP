<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

interface Auth
{
    public function login(String $email, String $password): ?User;
    public function register(String $email, String $password): void;
}