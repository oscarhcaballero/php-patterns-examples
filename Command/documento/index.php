<?php

declare(strict_types=1);
// cliente para un ejemplo del patrón de diseño de comportamiento Command
// Vamos a hacer un menú para un editor de texto

// receiver -> el documento
// comandos -> abrir, guardar, cerrar
// invoker -> botones del menu
// cliente: este script

use Ejemplos\Command\documento\CloseDocumentCommand;
use Ejemplos\Command\documento\Document;
use Ejemplos\Command\documento\Invoker;
use Ejemplos\Command\documento\OpenDocumentCommand;
use Ejemplos\Command\documento\SaveDocumentCommand;

require __DIR__ . '/../../../vendor/autoload.php';

echo 'Este es un ejemplo del Patrón de Comportamiento COMMAND: ' . \PHP_EOL;


// receiver
$document = new Document();

// comandos
$comandoOpen = new OpenDocumentCommand($document);
$comandoSave = new SaveDocumentCommand($document);
$comandoClose = new CloseDocumentCommand($document);

// invoker
$invoker = new Invoker($comandoOpen);
$invoker->run();

$invoker->setCommand($comandoSave);
$invoker->run();

$invoker->setCommand(new CloseDocumentCommand($document));
$invoker->run();
