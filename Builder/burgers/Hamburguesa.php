<?php
declare(strict_types=1);

namespace Ejemplos\Builder\burgers;

// Clase de producto (Hamburguesa)
class Hamburguesa
{
    
    public function __construct(
        private string $queso   = "no",
        private string $lechuga = "no", 
        private string $tomate  = "no"
    )   {}


    public function setQueso()
    {
        $this->queso = "si";
    }

    public function setLechuga()
    {
        $this->lechuga = "si";
    }

    public function setTomate()
    {
        $this->tomate = "si";
    }

    public function __toString(): string
    {
        return "Hamburguesa con queso: {$this->queso}, lechuga: {$this->lechuga}, tomate: {$this->tomate}";
    }
}

