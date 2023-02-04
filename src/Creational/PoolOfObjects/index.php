<?php

use Artem\Patterns\Creational\PoolOfObjects\Classes\ConnectionPool;

require '../../../vendor/autoload.php';

$connectionPool = new ConnectionPool();
$dbConnections[]= $connectionPool->getConnection();
$dbConnections[]= $connectionPool->getConnection();
$dbConnections[]= $connectionPool->getConnection();
$dbConnections[]= $connectionPool->getConnection();
/*array_push($dbConnections,
    $connectionPool->getConnection(),
    $connectionPool->getConnection(),
    $connectionPool->getConnection(),
    $connectionPool->getConnection()
);*/
foreach ($dbConnections as $db) {
    print_r($db);
}
foreach ($dbConnections as $db) {
$connectionPool->releaseConnection($db);
}
foreach ($dbConnections as $db) {
    print_r($db);
}
