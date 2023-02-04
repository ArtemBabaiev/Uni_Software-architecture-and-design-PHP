<?php

use Artem\Patterns\Structural\Adapter\Classes\FacebookAuth;
use Artem\Patterns\Structural\Adapter\Classes\FbAdapter;
use Artem\Patterns\Structural\Adapter\Classes\ManualAuth;

require '../../../vendor/autoload.php';

$manualAuth = new ManualAuth();
$manualAuth->register("BLOB", "password");
print_r($manualAuth->login("admin", "password"));

$facebookAuth = new FacebookAuth(
    new FbAdapter("123456789", "qwerty123456789")
);
print_r($facebookAuth->login("fb1", "password"));