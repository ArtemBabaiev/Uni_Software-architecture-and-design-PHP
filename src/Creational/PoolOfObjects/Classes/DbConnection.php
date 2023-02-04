<?php

namespace Artem\Patterns\Creational\PoolOfObjects\Classes;

class DbConnection
{
    public string $connectionString;
    public string $status;

    /**
     * @param string $connectionString
     * @param string $status
     */
    public function __construct(string $connectionString, string $status)
    {
        $this->connectionString = $connectionString;
        $this->status = $status;
    }


    public function processing():void {
        print_r("DbConnection : " . $this->connectionString . " is " . $this->status);
    }
}