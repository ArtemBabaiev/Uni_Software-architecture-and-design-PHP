<?php

namespace Artem\Patterns\Behavioral\Mediator\Classes;

abstract class IComponet
{
    public ?IMediator $mediator;

    /**
     * @param IMediator $mediator
     */
    public function __construct()
    {
        $this->mediator = null;
    }


    public function setMediator(IMediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}