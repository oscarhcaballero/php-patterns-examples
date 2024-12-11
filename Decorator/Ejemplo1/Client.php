<?php 
declare (strict_types=1);
namespace Ejemplos\Decorator\Ejemplo1;

class Client
{
    private $component;

    public function __construct()
    {
        $this->component = new ConcreteComponent();
        $this->component = $this->wrapComponent($this->component);

        echo $this->component->getData();
        echo "Client:\t\t\t";
        echo $this->component->getValue();
        echo "\n";
    }

    private function wrapComponent(Component $component)
    {
        $component1 = new ConcreteDecorator1($component);
        $component2 = new ConcreteDecorator2($component1);
        return $component2;
    }
}