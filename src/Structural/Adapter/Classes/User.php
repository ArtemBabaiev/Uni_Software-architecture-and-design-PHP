<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

class User
{
    public String $email;
    public String $password;
    /**
     * @param String $email
     * @param String $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}