<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

class CreditCard
{
    public string $number;
    public string $csv;

    /**
     * @param string $number
     * @param string $csv
     */
    public function __construct(string $number, string $csv)
    {
        $this->number = $number;
        $this->csv = $csv;
    }

}