<?php

namespace Artem\Patterns\Behavioral\Observer\Classes;

use JetBrains\PhpStorm\Internal\TentativeType;
use SplSubject;

class User implements \SplObserver
{

    public string $username;

    /**
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }

    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        echo "User \"$this->username\" reacted to product in stock\n";
    }
}