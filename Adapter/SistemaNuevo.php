<?php
declare(strict_types=1);    
namespace Ejemplos\Adapter;

// Sistema de pagos moderno
class SistemaNuevo implements Sistema {
    public function ejecutar($parametro) {
        echo "Realizando Acción de: $parametro mediante el nuevo sistema.\n";
    }
}

