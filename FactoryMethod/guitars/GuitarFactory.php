<?php

declare(strict_types=1);

namespace Ejemplos\FactoryMethod\guitars;

interface GuitarFactory 
{
    public function CreateGuitar(): Guitar;

}