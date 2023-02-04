<?php

namespace Artem\Patterns\Behavioral\Memento\Classes;

class OrderCaretaker
{
    private array $mementos = [];
    private Order $order;

    /**
     * @param array $mementos
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function backup(): void
    {
        $this->mementos[] = $this->order->save();
    }

    public function undo(): void
    {
        array_pop($this->mementos);
    }

    public function showHistory(){
        foreach ($this->mementos as $memento){
            print_r($memento);
        }
    }

}