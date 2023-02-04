<?php

use Artem\Patterns\Structural\Bridge\Classes\CreditCardMethod;
use Artem\Patterns\Structural\Bridge\Classes\EWalletMethod;
use Artem\Patterns\Structural\Bridge\Classes\PaymentImpl;

require '../../../vendor/autoload.php';

$payment1 = new PaymentImpl(new CreditCardMethod(), "424242424242424", 156);
$payment2 = new PaymentImpl(new EWalletMethod(), "123456789", 156);

$payment1->commitPayment();
$payment2->commitPayment();