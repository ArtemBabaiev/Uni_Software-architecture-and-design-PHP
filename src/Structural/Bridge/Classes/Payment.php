<?php

namespace Artem\Patterns\Structural\Bridge\Classes;

abstract class Payment
{
    public PaymentMethod $paymentMethod;
    public String $cardNumber;
    public float $price;

    /**
     * @param PaymentMethod $paymentMethod
     * @param String $cardNumber
     * @param float $price
     */
    public function __construct(PaymentMethod $paymentMethod, string $cardNumber, float $price)
    {
        $this->paymentMethod = $paymentMethod;
        $this->cardNumber = $cardNumber;
        $this->price = $price;
    }


    public abstract function commitPayment(): void;
}