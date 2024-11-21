<?php
declare(strict_types=1);
namespace Ejemplos\Prototype\clonador;

class MusicBookPrototype extends BookPrototype
{
    public function __clone()
    {
        // No hay lógica adicional, el método __clone simplemente genera una copia del objeto.
        // Si en el futuro hay que resetear o modificar alguna propiedad al clonar, se hace aquí.
    }
}

