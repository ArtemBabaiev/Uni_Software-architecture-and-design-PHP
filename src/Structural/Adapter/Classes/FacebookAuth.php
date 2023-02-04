<?php

namespace Artem\Patterns\Structural\Adapter\Classes;

use mysql_xdevapi\Exception;

class FacebookAuth implements Auth
{

    public LocalDB $localDB;
    public FbAdapter $fbAdapter;

    /**
     * @param LocalDB $localDB
     * @param FbAdapter $fbAdapter
     */
    public function __construct(FbAdapter $fbAdapter)
    {
        $this->localDB = LocalDB::getInstance();
        $this->fbAdapter = $fbAdapter;
    }


    public function login(string $email, string $password): ?User
    {
        try {
            $localUser = $this->localDB->getUser($email);
            if ($localUser != null) {
                return $localUser;
            }
            $fbUser = $this->fbAdapter->getUser($email);
            if ($fbUser != null) {
                $this->localDB->add($fbUser);
            }
            return $fbUser;
        } catch (\Exception $e) {
            print_r($e->getMessage());
            return null;
        }
    }

    /**
     * @throws \Exception
     */
    public function register(string $email, string $password): void
    {
        try {
            $fbUser = $this->fbAdapter->getUser($email);
            $localUser = $this->localDB->getUser($email);
            if ($localUser == null) {
                $this->localDB->add($fbUser);
            }
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }
}