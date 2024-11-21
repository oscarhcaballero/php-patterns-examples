<?php
declare(strict_types=1);

namespace Ejemplos\Observer\productos;


// Clase Cliente (Observador Concreto)
class Customer implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Implementación del método update
    public function update($message) {
        echo "Notificación para {$this->name}: {$message}\n";
    }
}


