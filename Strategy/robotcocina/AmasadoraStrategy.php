<?php
declare (strict_types=1);

namespace Ejemplos\Strategy\robotcocina;
use function var_dump;

//estrategia, implementa la interfaz, tendremos una estrategia por cada opción nueva en el menú 

class AmasadoraStrategy implements Strategy {

    public function execute():string {
        return "Amasando alimentos...";
    }

}