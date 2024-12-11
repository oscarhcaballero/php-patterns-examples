<?php 
declare(strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo1;

class ConcreteDecorator2 extends Decorator
{
    public function __construct(Component $data)
    {
        $this->data = $data;
        $this->value = 600; 
    }

    public function getData(): string 
    {
        return $this->data->getData() . "Concrete Decorator 2:\t{$this->value}\n";
    }

    public function getValue(): int 
    {
        return $this->value + $this->data->getValue();
    }
}
