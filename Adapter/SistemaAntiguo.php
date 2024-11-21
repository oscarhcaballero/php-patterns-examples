<?php 
declare(strict_types=1);

namespace Ejemplos\Adapter;

// El sistema antiguo, que no podemos modificar
class SistemaAntiguo {
    public function realizarAccion($parametro) {
        echo "Realizando Acción de: $parametro mediante el sistema antiguo.\n";
    }
}
