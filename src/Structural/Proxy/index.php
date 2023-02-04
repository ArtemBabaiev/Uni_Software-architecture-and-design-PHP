<?php

use Artem\Patterns\Structural\Proxy\Classes\CatalogDB;
use Artem\Patterns\Structural\Proxy\Classes\CatalogHashProxy;

require '../../../vendor/autoload.php';

$catalogHashProxy = new CatalogHashProxy(new CatalogDB());
print_r($catalogHashProxy->getAll());
print_r($catalogHashProxy->getById(1));

print_r("EXIT");