<?php

declare(strict_types=1);

// receiver

namespace Ejemplos\Command\documento;

use function var_dump;

class Document
{
    public function open(): void
    {
        var_dump('El documento está abierto');
    }

    public function save(): void
    {
        var_dump('El documento se ha guardado');
    }

    public function close(): void
    {
        var_dump('El documento se ha cerrado');
    }
}
