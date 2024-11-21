<?php
declare (strict_types=1);

namespace Ejemplos\Command\menu;

//invocador:  esto no se toca nunca más por mucho que crezcan las opciones

class Invoker {

    private $option;
   

    public function __construct(Command $op){
        $this->option = $op;

    }


    public function clickOption():void {
        $this->option->execute();
    }

}