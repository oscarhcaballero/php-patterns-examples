<?php 
declare(strict_types=1);

namespace Ejemplos\Adapter;

// Adaptador para el sistema antiguo, implementando la interfaz IPago
class SistemaAntiguoAdapter implements Sistema {
    //private $pagoAntiguo;
    public function __construct(private SistemaAntiguo $sistemaAntiguo) {
        //$this->sistemaA$sistemaAntiguo = $sistemaAntiguo;
    }
    public function ejecutar($parametro) {
        // Adaptamos el método antiguo al nuevo
        $this->sistemaAntiguo->realizarAccion($parametro);
    }
}
