<?php 
declare (strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo2\src\Decorators;


// Decorador: interfaz que implementa la interfaz del Componente (en este ejemplo Product)
// Con los Decoradores Concretos añadimos funcionalidades y responsabilidades al Componente
class PackagingDecorator extends ProductDecorator {

    public function getDescription(): string {
        // Aquí es donde añadimos una funcionalidad adicional
        // o dicho de otra forma, añadimos responsabilidades al Componente (Product)
        return $this->product->getDescription(). " + Embalaje especial";
    }

    public function getPrice(): float {
        // Aquí es donde añadimos una funcionalidad adicional
        // o dicho de otra forma, añadimos responsabilidades al Componente (Product)
        return $this->product->getPrice() + 10.50;
    }


}

