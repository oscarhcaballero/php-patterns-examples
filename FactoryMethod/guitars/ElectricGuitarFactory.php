<?php 

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

class ElectricGuitarFactory implements GuitarFactory
{
    // este es el método de fabricación (FactoryMethod)
    public function CreateGuitar(): Guitar
    {
        return new ElectricGuitar();
    }
}