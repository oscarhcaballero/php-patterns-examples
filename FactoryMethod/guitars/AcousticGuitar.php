<?php
declare (strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

//implementación del producto concreto. Aquí viene la lógica de negocio del producto
class AcousticGuitar implements Guitar
{
    public function guitarType(): string
    {
        return "Tipo de Guitarra: Acústica ". PHP_EOL;
    }
    
    public function tune(): string
    {
        return "Guitarra Acústica afinada!". PHP_EOL;
    }
}