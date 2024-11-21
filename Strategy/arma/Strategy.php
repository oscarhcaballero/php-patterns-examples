<?php
declare (strict_types=1);

// interfaz

namespace Ejemplos\Strategy\arma;

interface Strategy {

    public function execute():string;
    
}