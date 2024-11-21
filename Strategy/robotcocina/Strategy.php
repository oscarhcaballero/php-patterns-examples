<?php
declare (strict_types=1);

// interfaz

namespace Ejemplos\Strategy\robotcocina;

interface Strategy {

    public function execute():string;
    
}