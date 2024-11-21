<?php
declare(strict_types=1);
require __DIR__ . '/../../../vendor/autoload.php';

use Ejemplos\Command\menu\Menu; //receiver
use Ejemplos\Command\menu\Command;
use Ejemplos\Command\menu\Invoker;

use ReflectionClass;


// Obtener el comando desde la solicitud POST
$data = json_decode(file_get_contents('php://input'), true);
$commandName = $data['command'] ?? null;

// Validar que se ha enviado un nombre de comando
if (!$commandName) {
    echo "Comando no válido.";
    exit;
}


// Escanear automáticamente el directorio de comandos para encontrar todas las clases que implementan la interfaz Command
$commandNamespace = 'Ejemplos\\Command\\menu\\';
$directory = __DIR__;  // Ajusta esto según tu estructura
$foundCommand = null;

foreach (new DirectoryIterator($directory) as $file) {
    if ($file->isDot() || !$file->isFile() || $file->getExtension() !== 'php') {
        continue;
    }

    $className = $commandNamespace . $file->getBasename('.php');
    if (!class_exists($className)) {
        continue;
    }

    $reflectionClass = new ReflectionClass($className);
    if ($reflectionClass->implementsInterface(Command::class) && !$reflectionClass->isAbstract()) {
        if ($reflectionClass->getShortName() === $commandName) {
            $foundCommand = $className;
            break;
        }
    }
}


// Validar que el comando se ha encontrado
if (!$foundCommand) {
    echo "Comando no encontrado.";
    exit;
}

$menu = new Menu(); //receiver
$commandInstance = new $foundCommand($menu);
$invoker = new Invoker($commandInstance);

// Ejecutar el comando y capturar la salida
ob_start();
$invoker->clickOption();
$output = ob_get_clean();
echo $output;
die();