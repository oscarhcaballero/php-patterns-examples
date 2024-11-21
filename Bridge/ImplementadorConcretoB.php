<?php 
declare(strict_types=1);

namespace Ejemplos\Bridge;

class ImplementadorConcretoB implements Implementador {

    public function OperacionImp($contenido): string {
        return "Implementador Concreto B: ". $contenido. PHP_EOL;
    }

}