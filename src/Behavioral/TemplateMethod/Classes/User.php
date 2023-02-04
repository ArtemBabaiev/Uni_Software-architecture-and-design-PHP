<?php

namespace Artem\Patterns\Behavioral\TemplateMethod\Classes;

class User
{
    public string $username;
    public string $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

}