<?php

namespace Artem\Patterns\Behavioral\Mediator\Classes;

class OrderComponent extends IComponet
{

    public function __construct()
    {
        parent::__construct();
    }

    public function prepareOrder(): void
    {
        print_r("Preparing order\n");
        $this->mediator->notify("HANDLING");
    }

    public function fulfilOrderDB(): void
    {
        print_r("Order fulfilment\n");
    }
}