<?php

namespace Artem\Patterns\Behavioral\Mediator\Classes;

class PaymentSession extends IComponet
{


    public function __construct()
    {
        parent::__construct();
    }

    public function openSession(): void
    {
        print_r("PaymentSession open\n");
        $this->mediator->notify("OPEN");
    }

    public function handle(): void
    {
        print_r("payment handled\n");
        $this->mediator->notify("CLOSE");
    }

    public function closeSession(): void
    {
        print_r("PaymentSession closed\n");
    }
}