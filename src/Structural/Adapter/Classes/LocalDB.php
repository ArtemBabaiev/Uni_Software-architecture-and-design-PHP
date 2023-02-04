<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

class LocalDB
{
    public array $localDB = [];
    private static LocalDB $instance;

    /**
     * @param array $localDB
     */
    public function __construct()
    {
        array_push($this->localDB,
            new User("admin", "password"),
            new User("operator", "password")
        );
    }

    public static function getInstance(): LocalDB
    {
        if (!isset(self::$instance)) {
            self::$instance = new LocalDB();
        }
        return self::$instance;
    }

    public function add(User $user): void
    {
        $this->localDB[] = $user;
    }

    public function getUser(string $email): ?User
    {
        $filtered = array_filter($this->localDB, function (User $user) use($email) {
            return $user->email == $email;
        });
        $first = reset($filtered);
        if (isset($first) && !is_bool($first)){
            return $first ?? null;
        }
        return null;
    }
}