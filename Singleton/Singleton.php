<?php

declare (strict_types=1);
namespace Ejemplos\Singleton;

class Singleton {
    // Propiedad que almacenará la única instancia de la clase.
    private static $instance = null;

    // Constructor privado para evitar la creación de instancias desde fuera de la clase.
    private function __construct() {
        echo "Instancia creada\n";
    }

    // Clonación y deserialización deshabilitadas para evitar duplicación.
    private function __clone():void {}
    private function __wakeup():void {}

    // Método estático para acceder a la única instancia.
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton(); //aquí se ejecuta el constructor
        }
        return self::$instance;
    }

    // Método de ejemplo para demostrar funcionalidad.
    public function doSomething():void {
        echo "Ejecutando algo...\n";
    }
}

