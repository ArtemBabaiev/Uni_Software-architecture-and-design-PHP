<?php

use Artem\Patterns\Behavioral\State\Classes\ActiveState;
use Artem\Patterns\Behavioral\State\Classes\BannedState;
use Artem\Patterns\Behavioral\State\Classes\User;

require '../../../vendor/autoload.php';

$user = new User("user123", new ActiveState());
$user->auth();
$user->changeState(new BannedState());
$user->auth();
