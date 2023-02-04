<?php

namespace Artem\Patterns\Behavioral\ChainOfResponsibility\Classes;

interface IOrderHandler
{
function setNext(IOrderHandler $next): ?IOrderHandler;
function handle(Order $order): void ;
}