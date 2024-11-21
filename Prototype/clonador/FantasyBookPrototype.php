<?php
declare(strict_types=1);
namespace Ejemplos\Prototype\clonador;

class FantasyBookPrototype extends BookPrototype
{
    public function __clone()
    {
        // Al clonar, agregamos " - Edición Clonada" al título para distinguir la copia.
        $this->title = $this->title . " - Edición Clonada";
        
        // Si tuviera alguna otra propiedad que deba resetearse, también se haría aquí.
        // Por ejemplo, si hubiera un atributo `editionNumber`, podrías reiniciarlo:
        // $this->editionNumber = 1;
    }
}

