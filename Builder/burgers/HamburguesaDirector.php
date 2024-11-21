<?php

declare(strict_types=1);

namespace Ejemplos\Builder\burgers;

// Director
class HamburguesaDirector
{
    private $builder;

    public function __construct(HamburguesaBuilder $builder)
    {
        $this->builder = $builder;
    }

    //método para modificar el builder en el caso de que tengamos más de una implementación
    public function setBuilder(HamburguesaBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function construirHamburguesaConQueso(): void
    {
        $this->builder
                ->agregarQueso();
                
    }

    public function construirHamburguesaConTodo(): void
    {
        $this->builder
                ->agregarQueso()
                ->agregarLechuga()
                ->agregarTomate();
    }
}