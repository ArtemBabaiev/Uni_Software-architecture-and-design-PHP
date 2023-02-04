<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

class ManualAuth implements Auth
{
    private LocalDB $localDB;

    /**
     * @param LocalDB $localDB
     */
    public function __construct()
    {
        $this->localDB = LocalDB::getInstance();
    }

    public function login(string $email, string $password): ?User
    {
        $user = $this->localDB->getUser($email);
        if ($user == null) {
            print_r("no user in database");
            return null;
        }
        if (!$user->password == $password) {
            print_r("password mismatch");
            return null;
        }
        return $user;
    }

    public function register(string $email, string $password): void
    {
        $this->localDB->add(new User($email, $password));
    }
}