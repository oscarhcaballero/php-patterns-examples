<?php

declare(strict_types=1);

namespace Ejemplos\Command\documento;

class CloseDocumentCommand implements Command
{
    protected $document;

    // constructor con receiver
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    // implementacion de la interfaz
    public function execute(): void
    {
        $this->document->close();
    }
}
