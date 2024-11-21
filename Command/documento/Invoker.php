<?php

declare(strict_types=1);
// invoker

namespace Ejemplos\Command\documento;

// invoca a los comandos que hemos creado

class Invoker
{
   
    public function __construct(private $command) {
         
    }

    public function setCommand(Command $cmd){
        $this->command = $cmd;
    }

    public function run(): void
    {
        $this->command->execute();
    }

}
