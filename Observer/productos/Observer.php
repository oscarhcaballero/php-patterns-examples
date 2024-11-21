<?php
declare(strict_types=1);

namespace Ejemplos\Observer\productos;

// Interfaz del Observador
interface Observer {
    public function update($message);
}