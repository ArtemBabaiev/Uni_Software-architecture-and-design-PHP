<?php

use Artem\Patterns\Behavioral\Mediator\Classes\OrderComponent;
use Artem\Patterns\Behavioral\Mediator\Classes\OrderMediator;
use Artem\Patterns\Behavioral\Mediator\Classes\PaymentSession;

require '../../../vendor/autoload.php';

$orderComponent = new OrderComponent();
$session = new PaymentSession();
$mediator = new OrderMediator($session, $orderComponent);

$session->openSession();