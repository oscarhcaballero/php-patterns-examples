<?php

declare(strict_types=1);

namespace Ejemplos\Builder\hamburgesas;


// Clase de producto (Hamburguesa)
class Hamburguesa
{
    private string $queso ="no";
    private string $lechuga ="no";
    private string $tomate ="no";

    public function agregarQueso()
    {
        $this->queso = "si";
    }

    public function agregarLechuga()
    {
        $this->lechuga = "si";
    }

    public function agregarTomate()
    {
        $this->tomate = "si";
    }

    public function __toString(): string
    {
        return "Hamburguesa con queso: {$this->queso}, lechuga: {$this->lechuga}, tomate: {$this->tomate}";
    }
}

