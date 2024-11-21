<?php

namespace Ejemplos\FactoryMethod\creator;


class ConcreteProduct2 implements Product
{
     // lógica de negocio del producto 2
     public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}