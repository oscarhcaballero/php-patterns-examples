<?php

declare(strict_types=1);

namespace Ejemplos\Bridge;

class AbstraccionRefinada1 extends Abstraccion {

    public function Operacion() {
        $contenido = " -> AbstraccionRefinada1";
        return $this->implementador->OperacionImp($contenido);
    }

}