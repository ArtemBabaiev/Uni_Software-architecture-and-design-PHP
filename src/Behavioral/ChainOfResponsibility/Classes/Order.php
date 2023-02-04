<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

class Order
{
public CreditCard $card;
public Product $product;

    /**
     * @param CreditCard $card
     * @param Product $product
     */
    public function __construct(CreditCard $card, Product $product)
    {
        $this->card = $card;
        $this->product = $product;
    }

}