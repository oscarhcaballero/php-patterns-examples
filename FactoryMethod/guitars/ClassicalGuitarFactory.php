<?php

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

class ClassicalGuitarFactory implements GuitarFactory
{
    // este es el método de fabricación (FactoryMethod)
    public function CreateGuitar(): Guitar
    {
        return new ClassicalGuitar();
    }
}