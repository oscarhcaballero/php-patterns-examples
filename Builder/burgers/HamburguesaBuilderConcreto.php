<?php

declare(strict_types=1);

namespace Ejemplos\Builder\burgers;


// Clase concreta del Builder
// En este tipo de implementación tenemos un constructor con el objeto Producto
// y vamos a llamar a los setters del Producto para establecer sus propiedades
class HamburguesaBuilderConcreto implements HamburguesaBuilder
{
    private $hamburguesa;

    public function __construct()
    {
        $this->hamburguesa = new Hamburguesa();
    }

   
    public function agregarQueso(): self
    {
        $this->hamburguesa->setQueso();
        return $this;
        
    }

    public function agregarLechuga(): self
    {
        $this->hamburguesa->setLechuga();
        return $this;
    }

    public function agregarTomate(): self
    {
        $this->hamburguesa->setTomate();
        return $this;
    }

    public function construir(): Hamburguesa
    {
        return $this->hamburguesa;
    }
}