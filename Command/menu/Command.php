<?php
declare (strict_types=1);

// interfaz

namespace Ejemplos\Command\menu;

interface Command {

    public function execute():void;
    
}