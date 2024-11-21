<?php 

declare (strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

// interfaz de los productos que se van a crear. 
// Aquí viene la definición de la lógica de negocio de los productos
interface Guitar
{
    public function guitarType(): string;

    public function tune(): string;
    
}