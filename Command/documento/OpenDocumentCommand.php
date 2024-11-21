<?php

declare(strict_types=1);

namespace Ejemplos\Command\documento;

class OpenDocumentCommand implements Command
{
    protected $document;

    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    public function execute(): void
    {
        $this->document->open();
    }
}
