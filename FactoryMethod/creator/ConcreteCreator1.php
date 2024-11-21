<?php

namespace Ejemplos\FactoryMethod\creator;

/**
 * Los Concrete Creators sobreescriben el método de fábrica para cambiar el
 * tipo de producto resultante.
 */
class ConcreteCreator1 extends Creator
{
    /**
     * Tenga en cuenta que la firma del método todavía utiliza el tipo del producto abstracto.
     * aunque el producto concreto realmente se devuelva desde el método. 
     * De esta manera el Creador puede mantenerse independiente de las clases del producto concreto.
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}