<?php

namespace Artem\Patterns\Behavioral\Observer\Classes;

use JetBrains\PhpStorm\Internal\TentativeType;
use SplObserver;

class Product implements \SplSubject
{

    private string $name;
    private int $quantity;
    private \SplObjectStorage $observers;

    /**
     * @param string $name
     * @param int $quantity
     * @param \SplObjectStorage $observers
     */
    public function __construct(string $name, int $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->observers = new \SplObjectStorage();;
    }


    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
        $this->notify();
    }



}