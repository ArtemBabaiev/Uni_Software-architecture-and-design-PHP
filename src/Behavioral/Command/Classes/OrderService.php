<?php

namespace Artem\Patterns\Behavioral\Command\Classes;

class OrderService
{
public array $commands;

    /**
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }


    public function executeCommands(): void {
        foreach ($this->commands as $command){
            $command->execute();
        }
}

public function addCommand(ICommand $command): void {
    $this->commands[] = ($command);
}
}