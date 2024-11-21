<?php
declare (strict_types=1);

namespace Ejemplos\Strategy\arma;
use function var_dump;

//estrategia, implementa la interfaz, tendremos una estrategia por cada opción nueva en el menú 

class Balas7mmStrategy implements Strategy {

    public function execute():string {
        return "Disparando balas de 7mm...";
    }

}