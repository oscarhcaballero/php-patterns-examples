<?php
declare (strict_types=1);
namespace Ejemplos\Decorator;

abstract class Component
{
    protected $data;
    protected $value;

    abstract public function getData(): string;

    abstract public function getValue(): int;
}
