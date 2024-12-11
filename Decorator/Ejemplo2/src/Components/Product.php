<?php 
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2\src\Components;

// interfaz del Componente
interface Product {
    public function getDescription(): string;
    public function getPrice(): float;
}
