<?php 
declare(strict_types=1);

namespace Ejemplos\Bridge;

class ImplementadorConcretoA implements Implementador {

    public function OperacionImp($contenido): string {
        return "Implementador Concreto A: ". $contenido. PHP_EOL;
    }

}