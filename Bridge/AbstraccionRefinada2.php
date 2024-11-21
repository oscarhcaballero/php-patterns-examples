<?php

declare(strict_types=1);

namespace Ejemplos\Bridge;

class AbstraccionRefinada2 extends Abstraccion {

    public function Operacion() {
        $contenido = " -> AbstraccionRefinada2";
        return $this->implementador->OperacionImp($contenido);
    }

}