<?php

namespace Artem\Patterns\Behavioral\Mediator\Classes;

class OrderMediator implements IMediator
{
    public PaymentSession $session;
    public OrderComponent $orderComponent;

    /**
     * @param PaymentSession $session
     * @param OrderComponent $orderComponent
     */
    public function __construct(PaymentSession $session, OrderComponent $orderComponent)
    {
        $this->session = $session;
        $this->session->setMediator($this);
        $this->orderComponent = $orderComponent;
        $this->orderComponent->setMediator($this);
    }


    public function notify(string $event): void
    {
        switch ($event){
            case "OPEN":
                $this->orderComponent->prepareOrder();
                break;
            case "HANDLING":
                $this->session->handle();
                break;
            case "CLOSE":
                $this->session->closeSession();
                $this->orderComponent->fulfilOrderDB();
        }
    }
}