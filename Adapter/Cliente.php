<?php
declare(strict_types=1);
namespace Ejemplos\Adapter;

// El cliente ahora no necesita preocuparse sobre cuál sistema se usa
class Cliente {
    //private $sistema;
    public function __construct(private Sistema $sistema) {
        //$this->sistema = $sistema;
    }
    public function ejecutarOperacion($parametro) {
        $this->sistema->ejecutar($parametro);
    }
}

