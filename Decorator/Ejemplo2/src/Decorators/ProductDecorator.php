<?php 
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2\src\Decorators;

use Ejemplos\Decorator\Ejemplo2\src\Components\Product;

// Decorador: interfaz que implementa la interfaz del Componente (en este ejemplo Product)
// Esto es como un envoltorio que no añade nada, simplemente muestra lo que tiene
// el Componente (Producto). Es como un envoltorio transparente.

abstract class ProductDecorator implements Product {

    // en el constructor promovemos la interfaz del Componente
    public function __construct(protected Product $product) {}

    public function getDescription(): string {
        // retornamos lo que tiene el Componente(Producto) sin añadir funcionalidad
        return $this->product->getDescription();
    }

    public function getPrice(): float {
        // retornamos lo que tiene el Componente(Producto) sin añadir funcionalidad
        return $this->product->getPrice();
    }


}

