<?php
declare(strict_types=1);

namespace Ejemplos\Bridge;

abstract class Abstraccion {

        protected $implementador;
        public function __construct(Implementador $implementador) {
            $this->implementador = $implementador;
        }

        abstract public function Operacion();

}