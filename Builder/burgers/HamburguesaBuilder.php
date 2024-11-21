<?php

declare(strict_types=1);

namespace Ejemplos\Builder\burgers;

// Interfaz del Builder
interface HamburguesaBuilder
{
    public function agregarQueso(): self;
    public function agregarLechuga(): self;
    public function agregarTomate(): self;
    public function construir(): Hamburguesa;
}
