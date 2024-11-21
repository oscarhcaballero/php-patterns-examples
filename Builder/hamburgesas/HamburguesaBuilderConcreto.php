<?php

declare(strict_types=1);

namespace Ejemplos\Builder\hamburgesas;


// Clase concreta del Builder
class HamburguesaBuilderConcreto implements HamburguesaBuilder
{
    private $hamburguesa;

    public function __construct()
    {
        $this->hamburguesa = new Hamburguesa();
    }

   
    public function agregarQueso(): void
    {
        $this->hamburguesa->agregarQueso();
        
    }

    public function agregarLechuga(): void
    {
        $this->hamburguesa->agregarLechuga();
        
    }

    public function agregarTomate(): void
    {
        $this->hamburguesa->agregarTomate();
        
    }

    public function construir(): Hamburguesa
    {
        return $this->hamburguesa;
    }
}