<?php 
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2\src\Components;

// Componente concreto:   implementación de la interfaz del Componente.
class BasicProduct implements Product {

    public function __construct(    private string $description,
                                    private float $price    ) { 

    }

    public function getDescription(): string { 
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

}