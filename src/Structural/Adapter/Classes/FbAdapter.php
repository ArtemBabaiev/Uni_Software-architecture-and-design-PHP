<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

class FbAdapter
{
    private bool $accessState;
    private string $clientId;
    private string $clientSecret;
    private array $usersDB = [];

    /**
     * @param String $clientId
     * @param String $clientSecret
     */
    public function __construct(string $clientId, string $clientSecret)
    {
        $this->usersDB[] = new User("fb1", "password");
        $this->usersDB[] = new User("fb2", "password");
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function tryConnect(): bool
    {
        $this->accessState = $this->clientSecret == FacebookDev::FACEBOOK_CLIENT_SECRET &&
            $this->clientId == FacebookDev::FACEBOOK_CLIENT_ID;
        return $this->accessState;
    }

    /**
     * @throws \Exception
     */
    public function getUser(string $email): ?User
    {
        $this->tryConnect();
        if ($this->accessState) {
            $filtered = array_filter($this->usersDB, function (User $user) use ($email) {
                return $user->email == $email;
            });
            $first = reset($filtered);
            if (isset($first) && !is_bool($first)) {
                return $first ?? null;
            }
            return null;
        }
        throw new \Exception("invalid client ids");
    }
}