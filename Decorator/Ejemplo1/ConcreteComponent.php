<?php
declare (strict_types=1);
namespace Ejemplos\Decorator\Ejemplo1;

// Implemantamos la Interfaz de Component
class ConcreteComponent extends Component
{
    public function __construct()
    {
        $this->value = 1000;
        $this->data = "Concrete Component:\t{$this->value}\n";
            
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getValue():int 
    {
        return $this->value;
    }
}
