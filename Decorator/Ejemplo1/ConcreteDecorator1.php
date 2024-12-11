<?php 
declare(strict_types= 1);
namespace Ejemplos\Decorator\Ejemplo1;

class ConcreteDecorator1 extends Decorator
{
    public function __construct(Component $data)
    {
        $this->data = $data;
        $this->value = 500;
    }

    public function getData(): string 
    {
        return $this->data->getData() . "Concrete Decorator 1:\t{$this->value}\n";
    }

    public function getValue():int
    {
        return $this->value + $this->data->getValue();
    }
}
