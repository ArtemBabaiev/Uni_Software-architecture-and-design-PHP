<?php

namespace Artem\Patterns\Structural\Composite\Classes;


class Food extends BaseProduct
{
    public \DateTime $expirationDate;

    /**
     * @param \DateTime $expirationDate
     */
    public function __construct(string $name, int $quantity, float $price, \DateTime $expirationDate)
    {
        parent::__construct($name, $quantity, $price);
        $this->expirationDate = $expirationDate;
    }


}