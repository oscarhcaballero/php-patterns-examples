<?php

namespace Ejemplos\FactoryMethod\creator;



/**
 * Concrete Products provide various implementations of the Product interface.
 */
class ConcreteProduct1 implements Product
{
    // lógica de negocio del producto 1
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}