<?php

namespace Artem\Patterns\Behavioral\Command\Classes;

class OrderDbCommand implements ICommand
{
    public static array $db = [];
    public Order $order;

    /**
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }


    public function execute(): void
    {
        self::$db[] = $this->order;
        print_r(self::$db);
    }
}