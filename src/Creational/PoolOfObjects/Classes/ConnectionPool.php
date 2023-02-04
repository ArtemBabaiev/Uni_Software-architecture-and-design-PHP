<?php

namespace Artem\Patterns\Creational\PoolOfObjects\Classes;

class ConnectionPool
{
    private array $pool;

    /**
     */
    public function __construct()
    {
        $this->pool[] = new DbConnection("localhost:3306", "waiting");
        $this->pool[] = new DbConnection("localhost:72012", "waiting");
        $this->pool[] = new DbConnection("localhost:123", "waiting");
    }


    public function getConnection(): ?DbConnection
    {
        $filtered = array_filter($this->pool, function (DbConnection $obj) {
            if ($obj->status == "waiting") {
                return true;
            }
            return false;
        }
        );
        $fisrt = reset($filtered);
        if (isset($fisrt) && !is_bool($fisrt)){
            $fisrt->status = "processing";
            return $fisrt ?? null;
        }
        return null;
    }

    public function releaseConnection(?DbConnection $dbConnection):void{
    if ($dbConnection != null){
        $dbConnection->status = "waiting";
    }
}
}