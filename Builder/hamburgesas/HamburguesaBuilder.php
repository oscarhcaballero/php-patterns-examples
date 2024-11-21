<?php

declare(strict_types=1);

namespace Ejemplos\Builder\hamburgesas;

// Interfaz del Builder
interface HamburguesaBuilder
{
    public function agregarQueso(): void;
    public function agregarLechuga(): void;
    public function agregarTomate(): void;
    public function construir(): Hamburguesa;
}
