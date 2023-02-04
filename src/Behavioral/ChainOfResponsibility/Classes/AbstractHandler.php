<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

class AbstractHandler implements IOrderHandler
{
    private ?IOrderHandler $nextHandler;

    /**
     * @param ?IOrderHandler $nextHandler
     */
    public function __construct(?IOrderHandler $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }


    function setNext(IOrderHandler $next): ?IOrderHandler
    {
        $this->nextHandler = $next;
        return $next;
    }

    /**
     * @return ?IOrderHandler
     */
    public function getNextHandler(): ?IOrderHandler
    {
        return $this->nextHandler;
    }


    function handle(Order $order): void
    {
        print_r("Base handling\n");
        if ($this->nextHandler != null){
            $this->nextHandler->handle($order);
        }
    }
}