<?php
declare (strict_types=1);
namespace Ejemplos\Decorator\Ejemplo1;


// Component define la Interfaz

abstract class Component
{
    protected $data;
    protected $value;

    abstract public function getData(): string;

    abstract public function getValue(): int;
}
