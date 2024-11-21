<?php
declare (strict_types=1);
namespace Ejemplos\Adapter;


interface Sistema {
    public function ejecutar($parametro);
}