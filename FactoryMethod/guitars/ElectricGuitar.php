<?php
declare (strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

//implementación del producto concreto. Aquí viene la lógica de negocio del producto
class ElectricGuitar implements Guitar
{
    public function guitarType(): string 
    { 
        return "Tipo de Guitarra: Eléctrica ". PHP_EOL;
    }

    public function tune(): string
    {
        return "Guitarra Eléctrica afinada!". PHP_EOL;
    }
}