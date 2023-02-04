<?php

use Artem\Patterns\Structural\Decorator\Classes\EncryptionLoginDecorator;
use Artem\Patterns\Structural\Decorator\Classes\LoginDecorator;
use Artem\Patterns\Structural\Decorator\Classes\LoginServiceImpl;

require '../../../vendor/autoload.php';


$decorator = new EncryptionLoginDecorator(
    new LoginDecorator(
        new LoginServiceImpl()
    )
);

$decorator->login("admin", "password");