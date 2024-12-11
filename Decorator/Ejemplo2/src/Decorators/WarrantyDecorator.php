<?php 
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2\src\Decorators;

// como extendemos ProductDecorator, el cual implementa Product, necesitamos la interfaz Product
use Ejemplos\Decorator\Ejemplo2\Components\Product;

// Decorador: interfaz que implementa la interfaz del Componente (en este ejemplo Product)
// Con los Decoradores Concretos añadimos funcionalidades y responsabilidades al Componente
class WarrantyDecorator extends ProductDecorator {

    public function getDescription(): string {
        // Aquí es donde añadimos una funcionalidad adicional
        // o dicho de otra forma, añadimos responsabilidades al Componente (Product)
        return $this->product->getDescription(). " + Garantía extendida";
    }

    public function getPrice(): float {
        // Aquí es donde añadimos una funcionalidad adicional
        // o dicho de otra forma, añadimos responsabilidades al Componente (Product)
        return $this->product->getPrice() + 5.50;
    }


}
