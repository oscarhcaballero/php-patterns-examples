<?php

namespace Ejemplos\FactoryMethod\creator;

/**
 * La clase Creator declara el método de fábrica que se supone que debe devolver un objeto de una clase Producto. 
 * Las subclases del Creador suelen proporcionar la implementación de este método.
 */

/**
 * También tenga en cuenta que, a pesar de su nombre, la responsabilidad principal del Creador NO es
 * crear productos. Por lo general, contiene alguna lógica de megocio central que 
 * se basa en objetos Producto, devueltos por el método de fábrica. 
 * Las subclases pueden cambiar indirectamente esa lógica de negocio sobreescribiendo el método de fábrica y devolviendo un tipo diferente de producto.
 */

 
abstract class Creator
{
    /**
     * Tenga en cuenta que el Creador también puede proporcionar alguna implementación predeterminada del método de fábrica.
     */
    abstract public function factoryMethod(): Product;

    
    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}