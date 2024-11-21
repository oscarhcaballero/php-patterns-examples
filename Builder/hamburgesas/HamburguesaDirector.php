<?php

declare(strict_types=1);

namespace Ejemplos\Builder\hamburgesas;

// Director
class HamburguesaDirector
{
    private $builder;

    public function __construct(HamburguesaBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function construirHamburguesaConQueso(): void
    {
        $this->builder->agregarQueso();

        $this->builder->construir();
    }

    public function construirHamburguesaConTodo()
    {
        $this->builder->agregarQueso();
        $this->builder->agregarLechuga();
        $this->builder->agregarTomate();
        
        $this->builder->construir();
    }
}