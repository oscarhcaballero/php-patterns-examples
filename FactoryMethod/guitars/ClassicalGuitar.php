<?php 
declare (strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

//implementación del producto concreto. Aquí viene la lógica de negocio del producto
class ClassicalGuitar implements Guitar
{
    public function guitarType(): string
    {
        return "Tipo de Guitarra: Clásica ". PHP_EOL;
    }

    public function tune(): string
    {
        return "Guitarra Clásica afinada!". PHP_EOL;
    }
}